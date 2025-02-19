<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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

Route::get('/nice-dashboard', function () {
    return view('nice-dashboard');
});


Route::post('good/form',[pageController::class, 'index'])->name('good.form');

Route::get('index/sidebar',[pageController::class, 'sidebar']);

Route::get('index/main',[pageController::class, 'main'])->name('index.all');

Route::get('index/table',[pageController::class, 'table'])->name('index.table');

Route::get('index/dashboard',[pageController::class, 'dashboard'])->name('index.dashboard');




Route::get('/form', [pageController::class,'form_view'])->name('form.view');
Route::post('index/form/{id}',[pageController::class, 'form'])->name('index.form');

Route::get('/table', [pageController::class, 'tableform']);
Route::post('dash/table', [pageController::class, 'tableform'])->name('dash.table');

Route::get('delete/{id}', [pageController::class, 'delete_user']);


Route::get('nice-dashboard', [pageController::class,'data']);


Route::get('update/{id}', [pageController::class, 'update']);
Route::post('/update/form/register/{id}', [pageController::class, 'update_data']);







