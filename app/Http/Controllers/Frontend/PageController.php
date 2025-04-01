<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage() {
        return view('livewire.clients.homepage', [
            'title' => 'Tsutaya Bookstore'
        ]);
    }

    public function shopPage()  {
        return view('livewire.clients.shop-page', [
            'title' => 'Shop Page'
        ]);
    }

    public function productDetailPage()  {
        return view('livewire.clients.product-detail-page', [
            'title' => 'Product Detail Page'
        ]);
    }

    public function cartPage()  {
        return view('livewire.clients.cart-page', [
            'title' => 'Cart Page'
        ]);
    }

    public function checkoutPage(){
        return view('livewire.clients.checkout-page', [
            'title' => 'Checkout Page'
        ]);
    }

    public function blogPage()  {
        return view('livewire.clients.blog-page', [
            'title' => 'Blog Page'
        ]);
    }

    public function blogDetailPage(){
        return view('livewire.clients.blog-detail-page', [
            'title' => 'Blog Page'
        ]);
    }

    public function contactPage(){
        return view('livewire.clients.contact-page', [
            'title' => 'Blog Page'
        ]);
    }

    public function accountPage(){
        return view('livewire.clients.account-page', [
            'title' => 'Account Page'
        ]);
    }
}
