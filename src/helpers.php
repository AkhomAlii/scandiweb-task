<?php 


function base_path(string $path){

    return dirname(__DIR__) . "/{$path}"; 
}

function didu(...$args){
    echo '<pre>';

    var_dump($args);

    echo '</pre>';

    die();
}




function redirect($toWhere =''){

    header("Location: {$toWhere}");
}

function view($name, $data = []){

    extract($data);

     return require base_path("views/{$name}.view.php");
}


function partial($name, $data = []){
    
    extract($data);

     return require base_path("views/components/{$name}.view.php");

}
function properModel($model){

    $model = 'App\\Models\\'.$model;

    return new $model();
}


