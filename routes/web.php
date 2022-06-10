<?php

use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\FilemanagerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/filemanager', FilemanagerController::class)->middleware(['auth'])->name('filemanager');

Route::get('/akreditasi', AccreditationController::class)->middleware(['auth'])->name('akreditasi');


require __DIR__ . '/auth.php';
