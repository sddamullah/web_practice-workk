<?php

use App\Http\Controllers\myController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Command\SignalableCommandInterface;

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
Route::post('/form', [myController::class, 'submit']);
// Route::post('/form', [homeController::class, 'insert'])->name('register.form');


// for login and Signin

Route::get('delete/{id}', [myController::class, 'delete']);

Route::get('edit/{id}', [myController::class, 'edit_menu']);


Route::post('update/{id}', [myController::class,  'save_data']);
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


// Route::prefix('admin')->middleware(['auth', 'admin1'])->group(function(){
    Route::get('das/', function () {
        return view('admin.dashboard');
    });
    Route::get('admin/', function () {
        return view('admin.body');
    });
    Route::get('/table', [myController::class, 'show_tbale']);


 
Route::get('menu_form/', [myController::class, 'add_product']);

    Route::post('/edit_menu', [myController::class, 'add_menu']);

    Route::get('/listed_product', [myController::class, 'listed_product']);

    Route::get('layout/', [myController::class, 'listed']);
Route::get('layout/{slug}', [myController::class, 'view_catagory']);

// Route::get('get_catagory/', [myController::class, 'get_catagory']);
Route::post('save_catagory/', [myController::class, 'save_catagory']);
Route::get('show_catagory/', [myController::class, 'show_catagory']);
Route::get('delete_catgory/{id}', [myController::class, 'delete_catgory']);

Route::get('edit_catagory/{id}', [myController::class,  'get_catagory']);

Route::post('update_catagory/{id}', [myController::class,  'update_catagory']);
// create a catragory 
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');