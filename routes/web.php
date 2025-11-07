<?php
//users, markets, clients, debts edhe products

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
