<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

//Login
Utils::addRoute('loginShow',   'LoginCtrl');
Utils::addRoute('login',       'LoginCtrl');
Utils::addRoute('logout',      'LoginCtrl');
Utils::addRoute('registerShow','RegisterCtrl');
Utils::addRoute('register',    'RegisterCtrl');
//Users
Utils::addRoute('userList',    'UserListCtrl',	['admin']);
Utils::addRoute('userTable',   'UserListCtrl',	['admin']);
Utils::addRoute('userDelete',  'UserEditCtrl',	['admin']);
//Todos
Utils::addRoute('todoList',    'TodoListCtrl');
Utils::addRoute('todoTable',   'TodoListCtrl');
Utils::addRoute('todoNew',     'TodoEditCtrl',	['user', 'admin']);
Utils::addRoute('todoEdit',    'TodoEditCtrl',	['user', 'admin']);
Utils::addRoute('todoSave',    'TodoEditCtrl',	['user', 'admin']);
Utils::addRoute('todoDelete',  'TodoEditCtrl',	['user', 'admin']);
//Items
Utils::addRoute('itemList',    'ItemListCtrl',	['user', 'admin']);
Utils::addRoute('itemTable',   'ItemListCtrl',	['user', 'admin']);
Utils::addRoute('itemNew',     'ItemEditCtrl',	['user', 'admin']);
Utils::addRoute('itemEdit',    'ItemEditCtrl',	['user', 'admin']);
Utils::addRoute('itemSave',    'ItemEditCtrl',	['user', 'admin']);
Utils::addRoute('itemDelete',  'ItemEditCtrl',	['user', 'admin']);
Utils::addRoute('userDelete',  'UserEditCtrl',	['user', 'admin']);