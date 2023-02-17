<?php

use laieaat\Http\Route;




require dirname(__DIR__) . '/src/helpers.php';

require base_path('src/bootstrap.php');

require base_path('routes/web.php');

Route::resolve();