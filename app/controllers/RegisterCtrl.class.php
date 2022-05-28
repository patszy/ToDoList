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
        if (!isset($this->form->login) || !isset($this->form->password) || !isset($this->form->password2)) return false;

        try {
            $record = App::getDB()->get("user", "*", ["login" => $this->form->login]);

            if(!empty($record['login'])) Utils::addErrorMessage('User already exists.');
            if (empty($this->form->login)) Utils::addErrorMessage('Empty login.');
            if (empty($this->form->password) || empty($this->form->password2)) Utils::addErrorMessage('Empty password.');
            if($this->form->password != $this->form->password2) Utils::addErrorMessage('Passwords are different.');
            
            if(!App::getMessages()->isError()) {
                $role = App::getDB()->get("role", "*", [
                    "name" => 'user'
                ]);
                if(empty($role['name'])){
                    Utils::addErrorMessage('Privileges error.');
                } else {
                    App::getDB()->insert("user", [
                        "login" => $this->form->login,
                        "password" => password_hash($this->form->password, PASSWORD_DEFAULT)
                    ]);
                    $record = App::getDB()->get("user", "*", [
                        "login" => $this->form->login
                    ]);
                    App::getDB()->insert("user_role", [
                        "id_user" => $record['id_user'],
                        "id_role" => $role['id_role']
                    ]);
                }  
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Register error.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        if (App::getMessages()->isError()) return false;

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        $this->generateView();
    }

    public function action_register() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Successfully registered.');
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
