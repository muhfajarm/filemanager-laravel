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
	return view('index');
})->name('home');
Route::get('akreditasi', function () {
	return view('akreditasi.index');
})->name('akreditasi');

Route::group(['prefix' => 'collage', 'middleware' => 'auth'], function () {
	Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('/filemanager', FilemanagerController::class)
		->name('filemanager');

	Route::get('/akreditasi', [AccreditationController::class, 'index'])
		->name('collageAkreditasi');
	Route::post('/akreditasi', [AccreditationController::class, 'store'])
		->name('collageAddAkreditasi');
});


require __DIR__ . '/auth.php';
