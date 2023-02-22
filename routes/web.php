<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'index']);

Route::get('/about',[AboutController::class, 'about']);

Route::get('/articles{id}',[ArticleController::class, 'articles']);
