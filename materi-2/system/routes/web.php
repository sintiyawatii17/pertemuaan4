<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;


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

Route::get('/template', function() {
	return view("template.base");
});


Route::get('/contact', function() {
	return view("contact");
});

Route::get('/register', function() {
	return view("register");
});



// Route::get('/home', function() {
	// return view("home");
 

Route::get('/detail', function() {
	return view("detail");
});
Route::get('/home', [ClientController:: class, 'index']); 
Route::get('/beranda',[HomeController :: class, 'showBeranda']);
Route::get('/index',[UserController :: class, 'homeIndex']);
Route::get('/barang',[HomeController :: class, 'showBarang']);
Route::get('/kategori',[HomeController :: class, 'showKategori']);
Route::get('/login',[AuthController :: class, 'showLogin']);

Route::get('/produk',[ProdukController :: class, 'index']);
Route::get('/produk/create',[ProdukController :: class, 'create']);
Route::post('/produk',[ProdukController :: class, 'store']);
Route::get('/produk/{produk}',[ProdukController :: class, 'show']);
Route::get('/produk/{produk}/edit',[ProdukController :: class, 'edit']);
Route::put('/produk/{produk}',[ProdukController :: class, 'update']);
Route::delete('/produk/{produk}',[ProdukController :: class, 'destroy']);