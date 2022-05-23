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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Clients', 'prefix' => 'client'], function () {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::post('/', 'StoreController')->name('admin.client.store');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::delete('/{client}', 'DeleteController')->name('admin.client.delete');
    });
    Route::group(['namespace' => 'Topics', 'prefix' => 'topic'], function () {
        Route::get('/', 'IndexController')->name('admin.topic.index');
        Route::get('/create', 'CreateController')->name('admin.topic.create');
        Route::post('/', 'StoreController')->name('admin.topic.store');
        Route::get('/{topic}/edit', 'EditController')->name('admin.topic.edit');
        Route::patch('/{topic}', 'UpdateController')->name('admin.topic.update');
        Route::get('/{topic}', 'ShowController')->name('admin.topic.show');
        Route::delete('/{topic}', 'DeleteController')->name('admin.topic.delete');
    });
    Route::group(['namespace' => 'Photos', 'prefix' => 'photo'], function () {
        Route::group(['namespace' => 'Topic', 'prefix' => '{topic}/topic'], function () {
            Route::get('/', 'IndexController')->name('admin.photo.topic.index');
        });

        Route::post('/', 'StoreController')->name('admin.photo.store');
        Route::get('/', 'IndexController')->name('admin.photo.index');
        Route::get('/create', 'CreateController')->name('admin.photo.create');
        Route::get('/{photo}/edit', 'EditController')->name('admin.photo.edit');
        Route::patch('/{photo}', 'UpdateController')->name('admin.photo.update');
        Route::get('/{photo}', 'ShowController')->name('admin.photo.show');
        Route::delete('/{photo}', 'DeleteController')->name('admin.photo.delete');

    });
});
