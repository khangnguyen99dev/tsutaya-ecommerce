
<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
// Books
Route::get('/books', \App\Livewire\Admin\Books\Index::class)->name('books.index');
Route::get('/books/create', \App\Livewire\Admin\Books\Create::class)->name('books.create');
Route::get('/books/{id}/edit', \App\Livewire\Admin\Books\Edit::class)->name('books.edit');

// Categories
Route::get('/categories', \App\Livewire\Admin\Categories\Index::class)->name('categories.index');
Route::get('/categories/create', \App\Livewire\Admin\Categories\Create::class)->name('categories.create');
Route::get('/categories/{id}/edit', \App\Livewire\Admin\Categories\Edit::class)->name('categories.edit');