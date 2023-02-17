<?php

namespace laieaat\Http;


class Request{

    public static function method() :string

    {
        return $_SERVER['REQUEST_METHOD'];
    }

    
    public static function path() : string
    {
        // var_dump(parse_url($_SERVER['REQUEST_URI']));
        return parse_url($_SERVER['REQUEST_URI'])["path"] ?? '/';
    }
}
