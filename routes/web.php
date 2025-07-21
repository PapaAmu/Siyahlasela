<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/events', 'pages.events')->name('events');
Route::view('/membership', 'pages.membership')->name('membership');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/login', 'auth.login')->name('login');
