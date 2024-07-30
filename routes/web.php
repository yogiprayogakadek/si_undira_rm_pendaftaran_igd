<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Main')->middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::controller('DashboardController')
        ->prefix('/dashboard')
        ->name('dashboard.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });

    Route::controller('UserController')
        ->prefix('/pengguna')
        ->name('pengguna.')
        ->middleware(['checkRole:Kepala RM'])
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/store', 'store')->name('store');
            Route::post('/update', 'update')->name('update');
            Route::post('/delete', 'delete')->name('delete');

            Route::post('/update-password', 'updatePassword')->name('update.password');
        });

    Route::controller('PasienController')
        ->prefix('/pasien')
        ->name('pasien.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::middleware(['checkRole:Staff RM'])->group(function() {
                Route::get('/create', 'create')->name('create');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/store', 'store')->name('store');
                Route::post('/update', 'update')->name('update');
                Route::post('/delete', 'delete')->name('delete');

                Route::get('/detail/{id}', 'detail')->name('detail');
            });
        });

    Route::controller('DokterController')
        ->prefix('/dokter')
        ->name('dokter.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::middleware(['checkRole:Staff RM'])->group(function() {
                Route::get('/create', 'create')->name('create');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/store', 'store')->name('store');
                Route::post('/update', 'update')->name('update');
                Route::post('/delete', 'delete')->name('delete');

                Route::get('/detail/{id}', 'detail')->name('detail');
            });
        });

    Route::controller('DokumenController')
        ->prefix('/dokumen')
        ->name('dokumen.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/render', 'render')->name('render');
            Route::middleware(['checkRole:Staff RM'])->group(function() {
                Route::get('/create', 'create')->name('create');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/store', 'store')->name('store');
                Route::post('/update', 'update')->name('update');
                Route::post('/delete', 'delete')->name('delete');
            });
        });

    // Change Password
    Route::post('/pengguna/change-password', 'UserController@changePassword')->name('user.change.password');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
