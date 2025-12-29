<?php

use App\Http\Controllers\AdoptionFormController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\VolunteerFormController;
use App\Http\Middleware\IsAdministrator;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index'])->name('public.homepage');
Route::get('/about', function (){ return view('public.aboutpage'); })->name('public.aboutpage');
Route::get('/contact', function (){ return view('public.contactpage'); })->name('public.contactpage');
Route::post('/contact', [ContactController::class, 'store'])->name('public.contactpage.store');
Route::get('/benevoles', [VolunteerFormController::class, 'index'])->name('public.volunteerpage');
Route::post('/benevoles', [VolunteerFormController::class, 'store'])->name('public.volunteerpage.store');
Route::get('/adoption', [AdoptionFormController::class, 'index'])->name('public.adoptionpage');
Route::post('/adoption', [AdoptionFormController::class, 'store'])->name('public.adoptionpage.store');
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

Route::livewire('/admin/contact_messages', 'pages::contact_messages.index')->name('admin.contact_messages.index')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/volunteer_messages', 'pages::volunteer_messages')->name('admin.volunteer_messages')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/adoptions', 'pages::adoptions.index')->name('admin.adoptions.index')->middleware('auth', IsAdministrator::class);

Route::livewire('/admin/tasks', 'pages::tasks.index')->name('admin.tasks.index')->middleware('auth', IsAdministrator::class);
