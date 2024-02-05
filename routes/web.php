<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Form_peminjam;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FormPeminjamController;
use App\Http\Controllers\Sesicintroller;

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

Route::get('/crud', [App\Http\Controllers\HomeController::class, 'index'])->name('crud');

Route::get('list_bookcategory', [App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryList'])->name('bookcategory.index');
Route::get('/add_bookcategory',[App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryAdd'])->name('bookcategoryadd');
Route::post('/insert_bookcategory', [App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryInsert']);
Route::get('/edit_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookEditCategory']);
Route::post('/update_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookUpdateCategory']);
Route::get('/delete_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookDeleteCategory']);

Route::get('user_list', [App\Http\Controllers\backend\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/edit_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserDelete']);


Route::get('/formulir', function(){
    return view('formulir');
});

Route::get('/form_peralatan', function(){
    return view('form_peralatan');
});
Route::resource('form_peminjam', FormPeminjamController::class);

Route::post('/formulir', [FormPeminjamController::class, 'store'])->name('formulir');


