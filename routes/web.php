<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])
->middleware('auth', 'can:Админ');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/discipline', [Controller\Site::class, 'discipline'])
    ->middleware('auth', 'can:Админ|Методист');
Route::add(['GET', 'POST'], '/division', [Controller\Site::class, 'division'])
    ->middleware('auth', 'can:Админ|Методист');
Route::add(['GET', 'POST'], '/worker', [Controller\Site::class, 'worker'])
    ->middleware('auth', 'can:Админ|Методист');
