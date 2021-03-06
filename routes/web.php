<?php

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

Auth::routes();

Route::get('/acasa', 'HomeController@index')->name('home');

Route::get('/instructiuni', 'InstructionsController@index')->name('instructions');

Route::get('/pontare', 'ClockingController@index')->name('clocking');

Route::prefix('panou')->group(function () {
    Route::get('/', 'DashboardController@index')->name('panel_index');
    Route::get('/muncitori', 'WorkersController@index')->name('panel_workers');
    Route::get('/muncitori/adauga', 'WorkersController@create')->name('panel_workers_create');
    Route::get('/muncitori/{id}', 'WorkersController@show')->name('panel_workers_show');
});

Route::get('/setari', 'SettingsController@index')->name('settings');