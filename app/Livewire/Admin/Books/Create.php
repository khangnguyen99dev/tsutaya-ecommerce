<?php

namespace App\Livewire\Admin\Books;

use App\Models\Tsutaya\Author;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tsutaya\Book;
use App\Models\Tsutaya\Category;
use Illuminate\Support\Str;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    use WithFileUploads;
    
    public $title = [
        'en' => '',
        'ms' => '',
    ];
    public $description = [
        'en' => '',
        'ms' => '',
    ];
    public $short_sku;
    public $isbn13;
    public $publisher;
    public $date_published;
    public $author_id;

    public $retail_w_gst;
    public $activated = true;
    
    public $selectedCategories = [];
    
    public $image;
    
    public function render()
    {
        $categories = Category::all();  
        $authors = Author::all();

        return view('livewire.admin.books.create', [
            'categories' => $categories ?? [],
            'authors' => $authors ?? [],
        ])->layout('layouts.admin');
    }
    
    public function save()
    {
        $this->validate([
            'title.*' => 'required|string|max:255',
            'description.*' => 'required|string|max:255',
            'short_sku' => 'required|string|max:50',
            'publisher' => 'nullable|string|max:255',
            'isbn13' => 'nullable|string|max:13',
            'date_published' => 'nullable|date',
            'retail_w_gst' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'selectedCategories' => 'nullable|array',
            'author_id' => 'required|numeric',
        ]);
        
        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('books', 'public');
        }
        
        $book = Book::create([
            'en' => [
                'title' => $this->title['en'],
                'description' => $this->description['en'],
            ],
            'ms' => [
                'title' => $this->title['ms'],
                'description' => $this->description['ms'],
            ],
            'short_sku' => $this->short_sku ?? Str::slug($this->description),
            'publisher' => $this->publisher,
            'isbn13' => $this->isbn13,
            'date_published' => $this->date_published,
            'retail_w_gst' => $this->retail_w_gst,
            'activated' => $this->activated,
            'image' => $imagePath,
        ]);
        $book->authors()->sync([$this->author_id]);
        $book->categories()->sync($this->selectedCategories);
        
        Toaster::success('Book created successfully');
        return redirect()->route('admin.books.index');
    }
}
