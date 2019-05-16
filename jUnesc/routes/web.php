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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apresentacao', 'Site/SiteControll@apresentacao')->name('site.apresentacao');
# Rotas Protegidas
Route::group(
    [
        'middleware' => ['auth'],
        'prefix' => 'admin'
    ],
    function () {
        Route::resources([
            'author' => 'Admin\AuthorController',
            'event' => 'Admin\EventController',
            'presentation' => 'Admin\PresentationController',
            'type' => 'Admin\TypeController',
        ]);
    }
);
