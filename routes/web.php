<?php

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

Route::namespace('Main')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::controller('DashboardController')
        ->prefix('/dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });

    Route::controller('PasienController')
        ->prefix('/pasien')
        ->name('pasien.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/store', 'store')->name('store');
            Route::post('/update', 'update')->name('update');
            Route::post('/delete', 'delete')->name('delete');

            Route::get('/detail/{id}', 'detail')->name('detail');
        });

    Route::controller('DokterController')
        ->prefix('/dokter')
        ->name('dokter.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/store', 'store')->name('store');
            Route::post('/update', 'update')->name('update');
            Route::post('/delete', 'delete')->name('delete');

            Route::get('/detail/{id}', 'detail')->name('detail');
        });

    Route::controller('DokumenController')
        ->prefix('/dokumen')
        ->name('dokumen.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/store', 'store')->name('store');
            Route::post('/update', 'update')->name('update');
            Route::post('/delete', 'delete')->name('delete');
        });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
