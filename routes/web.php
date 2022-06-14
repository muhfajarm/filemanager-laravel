<?php

use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FilemanagerController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)
	->name('home');
Route::get('akreditasi', function () {
	return view('akreditasi.index');
})->name('akreditasi');

Route::group(['prefix' => 'collage', 'middleware' => 'auth'], function () {
	Route::get('/', function () {
		return redirect()->route('dashboard');
	});

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('filemanager', FilemanagerController::class)
		->name('filemanager');

	Route::group(['prefix' => 'accreditation'], function () {
		Route::get('/', [AccreditationController::class, 'index'])
			->name('collage.accreditation');
		Route::post('/', [AccreditationController::class, 'store'])
			->name('collage.add.accreditation');

		Route::get('/criterias', [CriteriaController::class, 'index'])
			->name('collage.criteria');
		Route::post('/criterias', [CriteriaController::class, 'store'])
			->name('collage.criteria.store');
		Route::get('/criterias/{id}/edit', [CriteriaController::class, 'edit'])
			->name('collage.criteria.edit');
		Route::put('/criterias/{id}', [CriteriaController::class, 'update'])
			->name('collage.criteria.update');
		Route::delete('/criterias/{id}', [CriteriaController::class, 'destroy'])
			->name('collage.criteria.delete');
	});
});


require __DIR__ . '/auth.php';
