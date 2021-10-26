<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SpecialiteController;
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
Route::get('/', [ViewController::class, 'index'])->name('home');

Route::get('view-category/{name}',[ViewController::class,'viewcategory']);


Route::resource('specialites', SpecialiteController::class);

Route::resource('categories', CategoriesController::class);


Route::get('is_login',[ViewController::class,'isLogin'])->name('is_login')->middleware('auth');
