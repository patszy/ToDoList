<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

//Users
Utils::addRoute('userList',    'userListCtrl',	['admin']);
Utils::addRoute('loginShow',   'LoginCtrl');
Utils::addRoute('login',       'LoginCtrl');
Utils::addRoute('logout',      'LoginCtrl');
Utils::addRoute('registerShow','RegisterCtrl');
Utils::addRoute('register',    'RegisterCtrl');
//Lists
Utils::addRoute('todoList',    'todoListCtrl',	);
Utils::addRoute('todoNew',     'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoEdit',    'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoSave',    'todoEditCtrl',	['user','admin']);
Utils::addRoute('todoDelete',  'todoEditCtrl',	['user','admin']);
Utils::addRoute('userDelete',  'userEditCtrl',	['admin']);
//Items
Utils::addRoute('itemList',    'itemListCtrl',	['user','admin']);
Utils::addRoute('itemNew',     'itemEditCtrl',	['user','admin']);
Utils::addRoute('itemEdit',    'itemEditCtrl',	['user','admin']);
Utils::addRoute('itemSave',    'itemEditCtrl',	['user','admin']);
Utils::addRoute('itemDelete',  'itemEditCtrl',	['user','admin']);
Utils::addRoute('userDelete',  'userEditCtrl',	['user','admin']);