<?php

namespace App\Livewire\Admin\Books;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tsutaya\Book;
// use App\Models\Tsutaya\Category;
// use App\Models\Tsutaya\Publisher;
// use App\Models\Tsutaya\Author;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    
    public $bookId;
    
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
    public $activated;
    
    // Categories
    public $selectedCategories = [];
    
    // Image
    public $image;
    public $existingImage;
    public $newImage;
    
    public function mount($id)
    {
        $this->bookId = $id;
        $book = Book::findOrFail($id);
        
        // Load book data
        $this->description = $book->description;
        $this->short_sku = $book->short_sku;
        $this->author = $book->author;
        $this->publisher = $book->publisher;
        $this->binding = $book->binding;
        $this->language = $book->language;
        $this->isbn13 = $book->isbn13;
        $this->date_published = $book->date_published;
        $this->synopsis = $book->synopsis;
        $this->retail_w_gst = $book->retail_w_gst;
        $this->activated = $book->activated;
        $this->existingImage = $book->image;
        
        // Load categories
        $this->selectedCategories = $book->categories->pluck('id')->toArray();
    }
    
    public function render()
    {
        return view('livewire.admin.books.edit', [
            // 'categories' => Category::orderBy('name')->get(),
            // 'publishers' => Publisher::orderBy('name')->get(),
            // 'authors' => Author::orderBy('name')->get(),
        ])->layout('layouts.admin');
    }
    
    public function update()
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
            'newImage' => 'nullable|image|max:2048', // max 2MB
            'selectedCategories' => 'nullable|array'
        ]);
        
        $book = Book::findOrFail($this->bookId);
        
        // Handle image upload
        if ($this->newImage) {
            // Delete old image if exists
            if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                Storage::disk('public')->delete($this->existingImage);
            }
            
            // Store new image
            $imagePath = $this->newImage->store('books', 'public');
            $book->image = $imagePath;
        }
        
        // Update book data
        $book->description = $this->description;
        $book->short_sku = $this->short_sku;
        $book->author = $this->author;
        $book->publisher = $this->publisher;
        $book->binding = $this->binding;
        $book->language = $this->language;
        $book->isbn13 = $this->isbn13;
        $book->date_published = $this->date_published;
        $book->synopsis = $this->synopsis;
        $book->retail_w_gst = $this->retail_w_gst;
        $book->activated = $this->activated;
        $book->save();
        
        // Update categories
        $book->categories()->sync($this->selectedCategories);
        
        $this->dispatch('showAlert', 'Book updated successfully');
        return redirect()->route('admin.books.index');
    }
    
    public function removeImage()
    {
        if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
            Storage::disk('public')->delete($this->existingImage);
        }
        
        $book = Book::findOrFail($this->bookId);
        $book->image = null;
        $book->save();
        
        $this->existingImage = null;
        $this->dispatch('showAlert', 'Image removed successfully');
    }
}
