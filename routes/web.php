<?php

use Src\Route;

Route::add('go', [Controller\Site::class, 'index']);
Route::add('hello', [Controller\Site::class, 'hello']);
Route::add('', [Controller\Site::class, 'hello']);
// 'go' - название маршрута, метод 'index', класса 'site'
// 'hello' - название маршрута, метод 'hello', класса 'site'