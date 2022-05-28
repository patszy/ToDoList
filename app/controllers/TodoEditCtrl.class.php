<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\TodoEditForm;

class TodoEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new TodoEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id',true,'App error: id.');
		$this->form->title = ParamUtils::getFromRequest('title',true,'App error: title.');
		$this->form->date = ParamUtils::getFromRequest('deadline',true,'App error: date.');

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->title))) Utils::addErrorMessage('Wprowadź tytuł.');
        if (empty(trim($this->form->date))) Utils::addErrorMessage('Wprowadź deadline.');

        if (App::getMessages()->isError())return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy list (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'App error: id.');
        return !App::getMessages()->isError();
    }

    public function action_todoNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_todoEdit() {
        // 1. walidacja id listy do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych listy o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("todolist", "*", [
                    "id_list" => $this->form->id
                ]);
                // 2.1 jeśli lista istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['id_list'];
				$this->form->title = $record['title'];
				$this->form->date = $record['date'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Loading list error.');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_todoDelete() {
        // 1. walidacja id listy do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("todolist", [
                    "id_list" => $this->form->id
                ]);
                Utils::addInfoMessage('Successfully deleted.');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Delete error.');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy list
        App::getRouter()->forwardTo('todoList');
    }

    public function action_todoSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {
                //2.1 Nowy rekord
                if ($this->form->id == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("todolist");
                    if ($count <= 20) {
                        $user = App::getDB()->get("user", "*", [
                            "login" => App::getConf()->roles['user']
                        ]);
                        App::getDB()->insert("todolist", [
                            "title" => $this->form->title,
							"date" => $this->form->date,
                            "id_user" => $user['id_user']
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Too much records in base. Delete few to add more.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("todolist", [
						"title" => $this->form->title,
						"date" => $this->form->date
					], [ 
						"id_list" => $this->form->id
					]);
                }
                Utils::addInfoMessage('Successfully saved.');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Save error.');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy list (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('todoList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('TodoEdit.tpl');
    }

}
