<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class RegisterCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->password2 = ParamUtils::getFromRequest('password2');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login)) return false;

        try {
            $record = App::getDB()->get("user", "*", [
                "login" => $this->form->login
            ]);

            if(!empty($record['login'])) {
                Utils::addErrorMessage('Login istnieje.');
            }
            if (empty($this->form->login)) {
                Utils::addErrorMessage('Nie podano loginu.');
            }
            if (empty($this->form->password) || empty($this->form->password2)) {
                Utils::addErrorMessage('Nie podano hasła.');
            }
            if($this->form->password != $this->form->password2) {
                Utils::addErrorMessage('Hasła nie są indentyczne.');
            }
            
            if(!App::getMessages()->isError()) {
                $role = App::getDB()->get("role", "*", [
                    "name" => 'user'
                ]);
                if(empty($role['name'])){
                    Utils::addErrorMessage('Wystąpił błąd podczas odczytywania uprawnień.');
                } else {
                    App::getDB()->insert("user", [
                        "login" => $this->form->login,
                        "password" => $this->form->password,
                        "id_list" => '1'
                    ]);
                    Utils::addInfoMessage('Zarejestrowano pomyślnie.');
                    $record = App::getDB()->get("user", "*", [
                        "name" => $this->form->login
                    ]);
                    App::getDB()->insert("user_role", [
                        "id_user" => $record['id_user'],
                        "id_role" => $role['id_role']
                    ]);
                    Utils::addInfoMessage('Zarejestrowano pomyślnie.');
                }  
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas rejestracji.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zarejestrowano do systemu');
            App::getRouter()->redirectTo("login");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('RegisterView.tpl');
    }

}
