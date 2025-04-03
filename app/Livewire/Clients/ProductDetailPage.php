<?php

namespace App\Livewire\Clients;

use App\Models\Tsutaya\Book;
use Livewire\Component;

class ProductDetailPage extends Component
{
    public $book;

    public function mount($id)
    {
        $book = Book::find($id);
        if (!$book)
            $book = Book::latest()->first();

        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.clients.product-detail-page')
            ->layout('layouts.app');
    }
}
