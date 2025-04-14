<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout', function () {
    return view('layout.layout');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
