<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ItemEditForm;

class ItemEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ItemEditForm();
    }

    public function getListId() {
        $this->form->id_list = ParamUtils::getFromCleanURL(1, true, 'List id loading error.');
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id',true,'App error: id.');
		$this->form->title = ParamUtils::getFromRequest('title',true,'App error: title.');
		$this->form->message = ParamUtils::getFromRequest('message',true,'App error: message.');
		$this->form->deadline = ParamUtils::getFromRequest('deadline',true,'App error: deadline.');

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->title))) Utils::addErrorMessage('Empty title.');
        if (empty(trim($this->form->message))) Utils::addErrorMessage('Empty message.');
        if (empty(trim($this->form->deadline))) Utils::addErrorMessage('Empty deadline.');

        if (App::getMessages()->isError()) return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(2, true, 'App error: id.');
        return !App::getMessages()->isError();
    }

    public function action_itemNew() {
        $this->getListId();
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_itemEdit() {
        $this->getListId();
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("todoitem", "*", [
                    "id_item" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['id_item'];
				$this->form->title = $record['title'];
				$this->form->message = $record['message'];
				$this->form->deadline = $record['deadline'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Loading item error.');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_itemDelete() {
        $this->getListId();
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("todoitem", [
                    "id_item" => $this->form->id
                ]);
                Utils::addInfoMessage('Successfully deleted.');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Delete error.');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('itemList');
    }

    public function action_itemSave() {
        $this->getListId();
        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->id == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("todoitem");
                    if ($count <= 20) {
                        App::getDB()->insert("todoitem", [
                            "title" => $this->form->title,
							"message" => $this->form->message,
							"deadline" => $this->form->deadline,
                            "id_list" => $this->form->id_list
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Too much records in base. Delete few to add more.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("todoitem", [
						"title" => $this->form->title,
						"message" => $this->form->message,
						"deadline" => $this->form->deadline
					], [ 
						"id_item" => $this->form->id
					]);
                }
                Utils::addInfoMessage('Successfully saved.');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Save error.');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http) d d
            App::getRouter()->forwardTo('itemList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('id_list', $this->form->id_list);  // lista rekordów z bazy danych
        App::getSmarty()->display('ItemEdit.tpl');
    }

}
