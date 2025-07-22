<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;

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

Route::post('/membership', [MembershipController::class, 'submit'])
    ->name('membership.submit');
