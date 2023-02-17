<?php

namespace laieaat;

use PDO;
use PDOException;

class Database{



    public static function connect($config) : PDO 
    {
        try
        {
            return new PDO(
                $config['connection'] . ':host=' . $config['host'] . 
                ';port=' . $config['port'] . 
                ';dbname=' . $config['dbname'],
                $config['uname'],
                $config['password'],
                $config['options']
            );
        }catch(PDOException $e){
            didu("Ops, Database Mismatch" ,$e->getMessage());
        }
    }
}