<?php

namespace App\Livewire\Admin\Books;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tsutaya\Book;
// use App\Models\Tsutaya\Category;
// use App\Models\Tsutaya\Publisher;
// use App\Models\Tsutaya\Author;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;
    
    // Book basic info
    public $description;
    public $short_sku;
    public $author;
    public $publisher;
    public $binding;
    public $language;
    public $isbn13;
    public $date_published;
    public $synopsis;
    
    // Book pricing
    public $retail_w_gst;
    public $activated = true;
    
    // Categories
    public $selectedCategories = [];
    
    // Image upload
    public $image;
    
    public function render()
    {
        return view('livewire.admin.books.create', [
            // 'categories' => Category::orderBy('name')->get(),
            // 'publishers' => Publisher::orderBy('name')->get(),
            // 'authors' => Author::orderBy('name')->get(),
        ])->layout('layouts.admin');
    }
    
    public function save()
    {
        $this->validate([
            'description' => 'required|string|max:255',
            'short_sku' => 'nullable|string|max:50',
            'author' => 'required|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'binding' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:100',
            'isbn13' => 'nullable|string|max:13',
            'date_published' => 'nullable|date',
            'synopsis' => 'nullable|string',
            'retail_w_gst' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048', // max 2MB
            'selectedCategories' => 'nullable|array'
        ]);
        
        // Handle image upload
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('books', 'public');
        }
        
        // Create the book
        $book = Book::create([
            'description' => $this->description,
            'short_sku' => $this->short_sku ?? Str::slug($this->description),
            'author' => $this->author,
            'publisher' => $this->publisher,
            'binding' => $this->binding,
            'language' => $this->language,
            'isbn13' => $this->isbn13,
            'date_published' => $this->date_published,
            'synopsis' => $this->synopsis,
            'retail_w_gst' => $this->retail_w_gst,
            'activated' => $this->activated,
            'image' => $imagePath,
        ]);
        
        // Attach categories
        if (!empty($this->selectedCategories)) {
            foreach ($this->selectedCategories as $categoryId) {
                if ($categoryId) {
                    $book->categories()->attach($categoryId);
                }
            }
        }
        
        $this->dispatch('showAlert', 'Book created successfully');
        return redirect()->route('admin.books.index');
    }
}
