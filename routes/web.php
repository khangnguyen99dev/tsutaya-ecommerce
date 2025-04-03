<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\LocalizationController;

// Frontend Routes
Route::get('/', App\Livewire\Clients\HomePage::class)->name('home');
Route::get('/shop', App\Livewire\Clients\ShopPage::class)->name('shop');
Route::get('/product-detail/{id}', App\Livewire\Clients\ProductDetailPage::class)->name('product-detail');
Route::get('/cart', App\Livewire\Clients\CartPage::class)->name('cart');
Route::get('/checkout', App\Livewire\Clients\CheckoutPage::class)->name('checkout');
Route::get('/blog', App\Livewire\Clients\BlogPage::class)->name('blog');
Route::get('/blog-detail', App\Livewire\Clients\BlogDetailPage::class)->name('blog-detail');
Route::get('/contact', App\Livewire\Clients\ContactPage::class)->name('contact');
Route::get('/account', App\Livewire\Clients\AccountPage::class)->name('account');
Route::get('/wishlist', App\Livewire\Clients\WishlistPage::class)->name('wishlist');

// Auth routers
require_once __DIR__ . '/auth.php';

// Admin routes
Route::prefix('admin')->name("admin.")->middleware([])
    ->group(function () {
        require_once __DIR__ . '/admin.php';
    });

// Localization routes
Route::get('/greeting/{locale}', [LocalizationController::class, 'setLocale']);
