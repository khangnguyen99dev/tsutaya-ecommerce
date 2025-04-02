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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Books
    Route::get('/books', \App\Livewire\Admin\Books\Index::class)->name('books.index');
    Route::get('/books/create', \App\Livewire\Admin\Books\Create::class)->name('books.create');
    Route::get('/books/{id}/edit', \App\Livewire\Admin\Books\Edit::class)->name('books.edit');
    
    // Categories
    Route::get('/categories', \App\Livewire\Admin\Categories\Index::class)->name('categories.index');
    Route::get('/categories/create', \App\Livewire\Admin\Categories\Create::class)->name('categories.create');
    Route::get('/categories/{id}/edit', \App\Livewire\Admin\Categories\Edit::class)->name('categories.edit');
});





