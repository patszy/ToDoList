<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('todoList',    'todoListCtrl');
Utils::addRoute('loginShow',   'LoginCtrl');
Utils::addRoute('login',       'LoginCtrl');
Utils::addRoute('logout',      'LoginCtrl');
Utils::addRoute('registerShow','RegisterCtrl');
Utils::addRoute('register',    'RegisterCtrl');
Utils::addRoute('todoNew',     'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoEdit',    'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoSave',    'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoDelete',  'todoEditCtrl',	['admin']);