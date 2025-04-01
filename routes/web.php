<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\PageController;

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

// Admin Routes
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Add more admin routes here
});





