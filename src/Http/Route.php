<?php

namespace laieaat\Http;

use App\Controllers\ProductsController;

class Route{

    public static array $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function get(string $route, string|callable|array $action) :void
    {
        self::$routes["GET"][$route] = $action;
    }
    
    public static function post(string $route, string|callable|array $action) :void
    {
        self::$routes["POST"][$route] = $action;
    }

    public static function resolve(){


        if(! isset( self::$routes[Request::method()][Request::path()])){
            return view('404');
        }
        
        $action = self::$routes[Request::method()][Request::path()];

        // didu((new $action[0])->index());
        
         call_user_func_array([new $action[0],$action[1]],[]);
        
    }
}