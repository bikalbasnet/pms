<?php

use App\Livewire\Patient;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class);

Route::get('/patient', Patient\CreatePatient::class);
Route::get('/patient/new', Patient\CreatePatient::class);

Route::get('/counter', \App\Livewire\Counter::class);
