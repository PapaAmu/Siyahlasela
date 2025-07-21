<?php

use Illuminate\Support\Facades\Route;

// Public Pages
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/events', 'pages.events')->name('events');
Route::view('/membership', 'pages.membership')->name('membership');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/login', 'auth.login')->name('login');

Route::view('/terms', 'pages.terms')->name('terms');

// Handle membership form submission
Route::post('/membership', [App\Http\Controllers\MembershipController::class, 'submit'])
    ->name('membership.submit');
