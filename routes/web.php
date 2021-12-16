<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerLogin;
use App\Http\Controllers\OrderController;
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

Route::get('/',[ProductController::class, 'index'])->name('main');
Route::post('/pushData',[ProductController::class, 'store'])->name('pushData');
Route::get('/Login',[CustomerLogin::class, 'index'])->name('Login');
Route::post('/regist',[CustomerLogin::class, 'Register'])->name('regist');
Route::post('/sign',[CustomerLogin::class, 'Login'])->name('sign');
Route::get('/logout',[CustomerLogin::class, 'Logout'])->name('logout');
Route::post('/AddCart',[OrderController::class, 'Order'])->name('order');
Route::get('/Cart',[OrderController::class, 'Cart'])->name('cart');
Route::get('/Checkout',[OrderController::class, 'Checkout'])->name('checkout');
Route::get('/Checkout_List',[OrderController::class, 'Checkout_List'])->name('Checkout_List');
Route::get('/Confirm',[OrderController::class, 'Confirm'])->name('Confirm');
Route::get('/Save_Confirm',[OrderController::class, 'Save_Confirm'])->name('Save_Confirm');
