<?php

use App\Http\Controllers\AdoptionFormController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('public.homepage');

Route::get('/about', function (){ return view('public.aboutpage'); })->name('public.aboutpage');

Route::get('/contact', function (){ return view('public.contactpage'); })->name('public.contactpage');

Route::get('/benevoles', function (){ return view('public.volunteerpage'); })->name('public.volunteerpage');

Route::get('/adoption', [AdoptionFormController::class, 'index'])->name('public.adoptionpage');

Route::get('/animals', [AnimalController::class, 'index'])->name('public.animals.index');

Route::get('/animals{animal}', [AnimalController::class, 'show'])->name('public.animals.show');

Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');
