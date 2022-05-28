<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login) || !isset($this->form->login)) return false;

        try {
            // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $user = App::getDB()->get("user", "*", ["login" => $this->form->login]);

            if (empty($this->form->login)) Utils::addErrorMessage('Wrong login.');
            if (empty($this->form->password)) Utils::addErrorMessage('Wrong password.');
            if (empty($user['login'])) Utils::addWarningMessage('Don\'t have acocunt? Register first.');
            
            if (App::getMessages()->isError() || App::getMessages()->isWarning()) return false;

            if($user['login'] == $this->form->login && password_verify($this->form->password, $user['password'])) {
                $user_role = App::getDB()->get("user_role", "*", [
                    "id_user" => $user['id_user']
                ]);
                $role = App::getDB()->get("role", "*", [
                    "id_role" => $user_role['id_role']
                ]);
                RoleUtils::addRole($role['name']);
                RoleUtils::addUser($user['login']);
            } else Utils::addErrorMessage('Wrong login or password.');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Login error.');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        if (App::getMessages()->isError()) return false;

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Successfully logged in.');
            App::getRouter()->redirectTo("todoList");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        App::getConf()->roles = '';
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('todoList');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
