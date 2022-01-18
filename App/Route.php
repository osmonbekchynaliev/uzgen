<?php

namespace App;


class Route{

    static $routes = [];
    public $params=[];
    static public function get($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        $REQUEST_URI = explode('?', $_SERVER['REQUEST_URI'])[0];
        if($method == 'GET' && $uri == $REQUEST_URI){
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = '\App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method();
            
        }

        //if ()
        self::$routes[] = $uri;
    }

    static public function post($uri, $move){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST' && $uri == $_SERVER['REQUEST_URI']){
            $controller = explode('@', $move)[0];
            $method = explode('@', $move)[1];
            $controller = '\App\Controllers\\'.$controller;
            $objectController = new $controller;
            $objectController->$method();
        }
        self::$routes[] = $uri;
    }

}
