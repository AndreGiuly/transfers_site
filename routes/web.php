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

Route::get('/', 'FrontOfficeController@index');



// Authenticated routes:
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('transfer/booking','SimulationController@saveStep');
Route::get('/transfer/booking/step1','SimulationController@renderStep1')->name('step1');
Route::post('transfer/booking/select-car','SimulationController@saveCar');
Route::get('/transfer/booking/luggage','SimulationController@getLuggage')->name('getLuggage');





Route::get('/produtos/categorias/lista', 'ProductCategoryController@index')->name('products.categories.list');

