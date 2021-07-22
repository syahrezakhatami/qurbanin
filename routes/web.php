<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SupplierController;
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
Route::resource('users', UserController::class);
Route::resource('customer', CustomerController::class);
Route::resource('category', CategoryController::class)->middleware('role:admin');
Route::resource('product', ProductController::class)->middleware('role:admin|supplier');
Route::resource('supplier', SupplierController::class)->middleware('role:admin|supplier');
Auth::routes();

Route::middleware('role:customer')->get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/category', [PageController::class, 'category']);
Route::get('/product', [PageController::class, 'product']);
Route::get('/users', [PageController::class, 'users']);
Route::get('/supplier', [PageController::class, 'supplier']);

