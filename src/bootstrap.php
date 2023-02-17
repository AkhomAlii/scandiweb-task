<?php
use laieaat\App;
use laieaat\Database;
use laieaat\ElegantModel;

require base_path('/vendor/autoload.php');


App::bind('config', require base_path('config/config.php'));

App::bind('database', 
    Database::connect(App::resolve('config')['database'])
);
 

ElegantModel::$pdo = App::resolve('database') ;