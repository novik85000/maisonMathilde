<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware(['set_locale'])-> group(function (){

    Auth::routes();

    Route::get('/', function () {
        return view('home');
    })->name('main');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('locale/{locale}', 'App\Http\Controllers\MainController@changeLocale')
        ->name('locale');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::post('/contacts/submit', 'App\Http\Controllers\ContactController@submit' )
        ->name('contacts-form');

    Route::get('/contacts', function () {
        return view('contacts', []);
    })->name('contacts');


    Route::middleware(['auth'])-> group(function () {

        Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')
            ->name('logout.perform');

        Route::middleware(['is_admin'])-> group(function () {

            Route::get('/messages/{id}',
                'App\Http\Controllers\ContactController@showOneMessage')
                ->name('contact-data-one');

            Route::get('/contact/all/{id}/delete',
                'App\Http\Controllers\ContactController@deleteMessage')
                ->name('contact-delete');

            Route::get('/messages', 'App\Http\Controllers\ContactController@allData')
                ->name('messages-all');

            Route::get('/creations/add', '\App\Http\Controllers\ProductController@addProduct')
            ->name('products-add');

            Route::get('/creations/all', '\App\Http\Controllers\ProductController@showAllProducts')
                ->name('products-all');

            Route::post('/creations/add', '\App\Http\Controllers\ProductController@submit')
                ->name('creations-add');

            Route::get('/creations/settings', function () {
                return view('settings');
            })->name('settings');

            Route::post('/tarifs/add', '\App\Http\Controllers\TarifController@submit')
            ->name('tarif-add');

            Route::get('/tarifs/add', function () {
                return view('tarif-add');
            })->name('tarif-add');

            Route::get('/tarifs/all', '\App\Http\Controllers\TarifController@allData')
            ->name('tarifs-all');

            Route::post('/tarifs/{id}/edit', '\App\Http\Controllers\TarifController@update')
                ->name('tarifs-edit');

            Route::get('/tarifs/{id}/edit', '\App\Http\Controllers\TarifController@edit')
                ->name('tarifs-edit');



        });

    });




});



