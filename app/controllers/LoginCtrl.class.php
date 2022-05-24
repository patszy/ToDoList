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
        if (!isset($this->form->login)) return false;

        try {
            // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
            $user = App::getDB()->get("user", "*", [
                "login" => $this->form->login
            ]);

            if (empty($this->form->login)) {
                Utils::addErrorMessage('Nie podano loginu');
            }
            if (empty($this->form->password)) {
                Utils::addErrorMessage('Nie podano hasła');
            }
            
            if (App::getMessages()->isError()) return false;

            if($user['login'] == $this->form->login && $user['password'] == $this->form->password) {
                $user_role = App::getDB()->get("user_role", "*", [
                    "id_user" => $user['id_user']
                ]);
                $role = App::getDB()->get("role", "*", [
                    "id_role" => $user_role['id_role']
                ]);
                RoleUtils::addRole($role['name']);
            } else Utils::addErrorMessage('Niepoprawny login lub hasło.');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas logowania.');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
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
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
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
