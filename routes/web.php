<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

// ========================== HOME =============================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/products', [ProductsController::class, 'products'])->name('products');

//cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

//user
Route::get('register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UserController::class, 'register']);
Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/forgot', [UserController::class, 'forgot'])->name('forgot');

// ========================== ADMIN =============================
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/search_admin', [AdminController::class, 'search_admin'])->name('search_admin');

//products
Route::get('/productadmin', [AdminController::class, 'productadmin'])->name('productadmin');
Route::post('/admin/products', [AdminController::class, 'add_product'])->name('add_product');
Route::delete('productadmin/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
Route::get('/admin/products/{id}/edit', [AdminController::class, 'edit_product'])->name('edit_product');
Route::put('/admin/products/{id}', [AdminController::class, 'update_product'])->name('update_product');

// category
Route::get('/categoryadmin', [AdminController::class, 'categoryadmin'])->name('categoryadmin');
Route::post('/admin/category', [AdminController::class, 'add_category'])->name('add_category');
Route::delete('categoryadmin/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('/admin/category/{id}/edit', [AdminController::class, 'edit_category'])->name('edit_category');
Route::put('/admin/category/{id}', [AdminController::class, 'update_category'])->name('update_category');









