<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllCategory;
use App\Http\Controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [EventController::class, 'index']);
Route::get('/form', [EventController::class, 'form']);
Route::post('/storeEvent', [EventController::class, 'storeEvent']);
Route::get('/event/{event}', [EventController::class, 'showEvent']);
Route::get('/event/edit/{event}', [EventController::class, 'editEvent']);
Route::patch('/event/edit/{event}', [EventController::class, 'updateEvent']);
Route::get('/event/{event}/delete/ask', [EventController::class, 'viewRemove']);
Route::get('/event/{event}/delete/confirm', [EventController::class, 'deleteEvent']);
Route::get('/event/{event}/register', [EventController::class, 'Registration']);
Route::get('/event/{event}/unregister', [EventController::class, 'unRegistration']);

// all category routes
Route::get('forma', [AllCategory::class, 'forma']);
Route::post('/storeCategory', [AllCategory::class, 'storeCategory']);

Route::get('/dashboard', [EventController::class, 'viewUserEvent'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
