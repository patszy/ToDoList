<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\AllSearchForm;

class TodoListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AllSearchForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->search = ParamUtils::getFromRequest('sf_title');

        return !App::getMessages()->isError();
    }

    public function load_data() {
        // 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
        $this->validate();

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        // przygotowanie parametru do wyszukania list zalogowanego usera
        if(isset(App::getConf()->roles['role']) && isset(App::getConf()->roles['user'])) {
            try {
                $user = App::getDB()->get("user", "*", ["login" => App::getConf()->roles['user']]);
                
                $search_params['id_user'] = $user['id_user'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Loading user data error.');
                if (App::getConf()->debug)Utils::addErrorMessage($e->getMessage());
            }
        } 
        
        if (isset($this->form->search) && strlen($this->form->search) > 0) {
            $search_params['title[~]'] = '%'.$this->form->search.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "title";
        //wykonanie zapytania

        try {
            $this->records = App::getDB()->select("todolist", [
                "id_list",
                "title",
                "date"
            ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Loading list error.');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_todoList() {
        $this->load_data();
        // Wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('lists', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('TodoList.tpl');
    }

    public function action_todoTable() {
        $this->load_data();
        // Wygeneruj widok samej tabeli
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('lists', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('TodoTable.tpl');
    }
}
