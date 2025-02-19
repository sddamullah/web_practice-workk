<?php


use App\http\Controllers\firstController;
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

Route::get('/signup ', function () {
    return view('signup');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/table', function () {
    return view('table');
});

Route::post('form/register', [firstcontroller::class, 'form_submit'])->name('form.register');
// Route::post('table/new', [firstcontroller::class, 'table'])->name('table.new');
// Route::post('form/register', [firstcontroller::class, 'form_submit'])->name('form.register');
Route::get('/table', [firstController::class, 'table_show'])->name('table_show');
Route::get('delete/{id}', [firstController::class, 'delete'])->name('delete.{id}');