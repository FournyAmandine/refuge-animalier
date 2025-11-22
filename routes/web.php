<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('public.homepage');
})->name('public.homepage');

Route::get('/about', function (){
    return view('public.aboutpage');
})->name('public.aboutpage');

Route::get('/animals', function (){
    return view('public.animals.index');
})->name('public.animals.index');
