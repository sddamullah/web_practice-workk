<?php

use App\Http\Controllers\homeController;
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
// Route::get('/form',function(){
//     return view('form');
// });
Route::post('register/form', [homeController::class, 'insert'])->name('register.form');

Route::get('form', [homeController::class, 'show']);
Route::get('/table', [homeController::class, 'show']);
Route::post('table/register', [homeController::class, 'show']);
