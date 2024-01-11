<?php

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
    return view('layouts.main');
});

Route::group(['namespace' => 'Genre'], function (){
    Route::get('/genre', 'IndexController')->name('genre.index');
    Route::get('/genre/{id}/show', 'ShowController')->name('genre.show');
    Route::get('/genre/create', 'CreateController')->name('genre.create');
    Route::post('/genre/store', 'StoreController')->name('genre.store');
    Route::get('/genre/{id}/edit', 'EditController')->name('genre.edit');
    Route::post('/genre/{id}/update', 'UpdateController')->name('genre.update');
    Route::get('/genre/{id}/delete', 'DestroyController')->name('genre.destroy');    
});

Route::group(['namespace' => 'Film'], function (){
    Route::get('/film', 'IndexController')->name('film.index');
    Route::get('/film/{id}/show', 'ShowController')->name('film.show');
    Route::get('/film/create', 'CreateController')->name('film.create');
    Route::post('/film/store', 'StoreController')->name('film.store');
    Route::get('/film/{id}/edit', 'EditController')->name('film.edit');
    Route::post('/film/{id}/update', 'UpdateController')->name('film.update');
    Route::get('/film/{id}/delete', 'DestroyController')->name('film.destroy');    
});
