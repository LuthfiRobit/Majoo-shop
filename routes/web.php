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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/detail/{slug}', 'ProductController@index')->name('detail');
// Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('dashboard');
Route::prefix('product')
    ->group(function () {
        Route::get('/', 'ProductController@index')
            ->name('products');
        Route::get('/detail/{slug}', 'ProductController@detail')
            ->name('detail');
    });

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('product', 'ProductController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Route::prefix('cart')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'CartController@index')->name('cart');
        Route::post('/', 'CartController@store');
        Route::get('/delete/{id}', 'CartController@delete');
        // Route::post('/change_qty', 'CartController@change_qty');
    });
Auth::routes(['verify' => true]);
