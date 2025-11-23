<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('public.homepage');
})->name('public.homepage');

Route::get('/about', function (){
    return view('public.aboutpage');
})->name('public.aboutpage');

Route::get('/contact', function (){
    return view('public.contactpage');
})->name('public.contactpage');

Route::get('/benevoles', function (){
    return view('public.volunteerpage');
})->name('public.volunteerpage');

Route::get('/adoption', function (){
    return view('public.adoptionpage');
})->name('public.adoptionpage');

Route::get('/animals', [AnimalController::class, 'index'])->name('public.animals.index');
