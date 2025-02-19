<?php

use App\Http\Controllers\myController;
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

Route::get('/', [myController::class, 'food_web']);
Route::get('/admin', [myController::class, 'admin']);
// Route::get('/admintable', [myController::class, 'admintable']);

Route::get('/table', [myController::class, 'show']);

// Route::get('/form', function () {
//     return view('form');
// });
Route::get('/dash', function () {
    return view('dashboard');
});
// Route::post('/data', [myController::class,  'save_data']);
// Route::get('/data', function () {
//     return view('form');
// });

Route::get('/data', [myController::class, 'get_data']);
Route::post('data/{id}', [myController::class,  'save_data']);



Route::get('delete/{id}', [myController::class, 'delete'])->name('delete.{id}');

// Route::get('edit/{id}', [myController::class, 'show_data']);
// Route::post('edit/{id}', [myController::class, 'update']);

Route::post('/images', [myController::class,  'save_image']);
Route::get('/images', [myController::class,  'image_form']);


Route::get('tablesss', [myController::class, 'image_table'])->name('img.table');



Route::get('/imgform', function () {
    return view('new_welcome');
});

// Route::get('update/{id}', [pageController::class, 'update']);
// Route::post('/update/form/register/{id}', [pageController::class, 'update_data']);