<?php

require_once 'Controllers//MainPageController.php';
require_once 'Controllers//SecurityController.php';
require_once 'Controllers//RecipieController.php';
require_once 'Controllers//NewRecipieController.php';


class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'main_page' => [
                'controller' => 'MainPageController',
                'action' => 'show'
            ],
            
            'new_recipie' => [
                'controller' => 'NewRecipieController',
                'action' => 'show'
            ],

            'recipie_upload' => [
                'controller' => 'NewRecipieController',
                'action' => 'upload'
            ],
            
            'recipie' => [
                'controller' => 'RecipieController',
                'action' => 'show'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }

}