<?php

use App\Http\Controllers\AdoptionFormController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HomePageController;
use App\Http\Middleware\IsAdministrator;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('public.homepage');
Route::get('/about', function (){ return view('public.aboutpage'); })->name('public.aboutpage');
Route::get('/contact', function (){ return view('public.contactpage'); })->name('public.contactpage');
Route::get('/benevoles', function (){ return view('public.volunteerpage'); })->name('public.volunteerpage');
Route::get('/adoption', [AdoptionFormController::class, 'index'])->name('public.adoptionpage');
Route::get('/animals', [AnimalController::class, 'index'])->name('public.animals.index');
Route::get('/animals{animal}', [AnimalController::class, 'show'])->name('public.animals.show');

Route::livewire('/admin/dashboard', 'pages::dashboard')->name('dashboard')->middleware('auth', IsAdministrator::class);
Route::livewire('/admin/profil', 'pages::profil')->name('profil')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/animals/create', 'pages::animals.create')->name('admin.animals.create')->middleware('auth');
Route::livewire('/admin/animals/{animal}/edit', 'pages::animals.edit')->name('admin.animals.edit')->middleware('auth');
Route::livewire('/admin/animals/{animal}', 'pages::animals.show')->name('admin.animals.show')->middleware('auth');
Route::livewire('/admin/animals', 'pages::animals.index')->name('admin.animals.index')->middleware('auth');

Route::livewire('/admin/volunteers/create', 'pages::volunteers.create')->name('admin.volunteers.create')->middleware('auth', IsAdministrator::class);
Route::livewire('/admin/volunteers/{volunteer}/edit', 'pages::volunteers.edit')->name('admin.volunteers.edit')->middleware('auth', IsAdministrator::class);
Route::livewire('/admin/volunteers/{volunteer}', 'pages::volunteers.show')->name('admin.volunteers.show')->middleware('auth', IsAdministrator::class);
Route::livewire('/admin/volunteers', 'pages::volunteers.index')->name('admin.volunteers.index')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/messages', 'pages::messages.index')->name('admin.messages.index')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/adoptions', 'pages::adoptions.index')->name('admin.adoptions.index')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/tasks', 'pages::tasks.index')->name('admin.tasks.index')->middleware('auth', IsAdministrator::class);
