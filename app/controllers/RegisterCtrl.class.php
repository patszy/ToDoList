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
        $this->form->password2 = ParamUtils::getFromRequest('password');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login)) return false;

        if($this->form->password != $this->form->password2) {
            Utils::addErrorMessage('Hasła nie są indentyczne.');
        }

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
            if (empty($this->form->password)) {
                Utils::addErrorMessage('Nie podano hasła.');
            }
            
            if($record['login'] == $this->form->login && $record['password'] == $this->form->password) {
                RoleUtils::addRole('admin');//odczyt roli z BD.
            } else Utils::addErrorMessage('Niepoprawny login lub hasło');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
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
