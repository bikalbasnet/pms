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

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', Welcome::class);


    Route::get('/patient', Patient\ShowPatients::class)->middleware('auth');;
    Route::get('/patient/new', Patient\CreatePatient::class);
    Route::get('/patient/edit/{patient}', Patient\UpdatePatient::class);

    Route::get('/doctor', \App\Livewire\Doctor\ShowDoctors::class);
    Route::get('/doctor/new', \App\Livewire\Doctor\CreateDoctor::class);
    Route::get('/doctor/edit/{doctor}', \App\Livewire\Doctor\UpdateDoctor::class);

    Route::get('/appointment', \App\Livewire\Appointment\ShowAppointments::class);
    Route::get('/appointment/new', \App\Livewire\Appointment\CreateAppointment::class);
});

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
Route::get('/logout', \App\Http\Controllers\AuthController::class . '@logout');

