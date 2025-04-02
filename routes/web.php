<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\PageController;

// Frontend Routes
Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/shop', [PageController::class, 'shopPage'])->name('shop');
Route::get('/product-detail', [PageController::class, 'productDetailPage'])->name('product-detail');
Route::get('/cart', [PageController::class, 'cartPage'])->name('cart');
Route::get('/checkout', [PageController::class, 'checkoutPage'])->name('checkout');
Route::get('/blog', [PageController::class, 'blogPage'])->name('blog');
Route::get('/blog-detail', [PageController::class, 'blogDetailPage'])->name('blog-detail');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');
Route::get('/account', [PageController::class, 'accountPage'])->name('account');
Route::get('/wishlist', [PageController::class, 'wishlistPage'])->name('wishlist');

// Auth routers
require_once __DIR__ . '/auth.php';

// Admin routes
Route::prefix('admin')
    ->name("admin.")
    ->middleware([])
    ->group(function () {
        require_once __DIR__ . '/admin.php';
    });
