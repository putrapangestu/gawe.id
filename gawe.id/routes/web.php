<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tambah', function () {
    return view('tambah');    
});

Route::get('/list', function () {
    return view('list');    
});