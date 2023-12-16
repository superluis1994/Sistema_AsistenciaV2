<?php

namespace Routes;

use Core\Route;
use Core\Utils;

Route::group('/', function () {
    Route::get('/ejemplo', "EjemploControllers@index");
    Route::get('', "EjemploControllers@index");
  
});