<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\productController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'isadmin']], function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\frontendController::class, 'index']);
    Route::get('/show_categoryform', [App\Http\Controllers\Admin\categoryController::class, 'show_categoryform']);
    Route::post('/insert_category', [App\Http\Controllers\Admin\categoryController::class, 'insert_category']);

    Route::get('/show_category', [App\Http\Controllers\Admin\categoryController::class, 'show_category']);
    Route::get('/delete_category/{id}', [App\Http\Controllers\Admin\categoryController::class, 'delete_category']);
    Route::get('/get_category/{id}', [App\Http\Controllers\Admin\categoryController::class, 'get_category']);
    Route::post('/update_catagory/{id}', [App\Http\Controllers\Admin\categoryController::class, 'update_catagory']);




    Route::get('/show_productform', [App\Http\Controllers\Admin\productController::class, 'show_productform']);
    Route::post('/insert_product', [App\Http\Controllers\Admin\productController::class, 'insert_product']);
    Route::get('/show_product', [App\Http\Controllers\Admin\productController::class, 'show_product']);
    
    Route::get('/get_Product/{id}', [App\Http\Controllers\Admin\productController::class, 'get_Product']);
    Route::post('/update_product/{id}', [App\Http\Controllers\Admin\productController::class, 'update_product']);
    Route::get('/delete_Product/{id}', [App\Http\Controllers\Admin\productController::class, 'delete_Product']);

    

    

});
