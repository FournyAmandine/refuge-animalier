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

Route::livewire('/admin/animals/create', 'pages::animals.create')->name('admin.animals.create');
Route::livewire('/admin/animals/{animal}/edit', 'pages::animals.edit')->name('admin.animals.edit');
Route::livewire('/admin/animals/{animal}', 'pages::animals.show')->name('admin.animals.show');
Route::livewire('/admin/animals', 'pages::animals.index')->name('admin.animals.index');

Route::livewire('/admin/volunteers/create', 'pages::volunteers.create')->name('admin.volunteers.create');
Route::livewire('/admin/volunteers/{volunteer}/edit', 'pages::volunteers.edit')->name('admin.volunteers.edit');
Route::livewire('/admin/volunteers/{volunteer}', 'pages::volunteers.show')->name('admin.volunteers.show');
Route::livewire('/admin/volunteers', 'pages::volunteers.index')->name('admin.volunteers.index');

Route::livewire('/admin/messages', 'pages::messages.index')->name('admin.messages.index');
