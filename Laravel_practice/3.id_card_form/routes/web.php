<?php

use App\Http\Controllers\idController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\FirePHPHandler;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

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
    // Route::get('id/form', function () {
    //     return view('id');

});
Route::post('id/form', [idController::class, 'id_form'])->name('id.form');

Route::get('form', function () {
    return view('id');
});
// Route::post('/table',[idController::class, 'id_table']);
Route::get('table',[idController::class, 'show'])->name('id.table');

Route::get('delete/{id}',[idController::class, 'delete'])->name('delete.{id}');


Route::get('update/{id}', [idController::class, 'showdata']);
Route::post('update/form/{id}', [idController::class, 'update']);

