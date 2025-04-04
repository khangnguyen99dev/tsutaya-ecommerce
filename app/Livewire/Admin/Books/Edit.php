<?php

namespace App\Livewire\Admin\Books;

use App\Models\Tsutaya\Author;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tsutaya\Book;
use App\Models\Tsutaya\Category;
use Illuminate\Support\Facades\Storage;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{
    use WithFileUploads;

    public $bookId;

    public $title;
    public $description;
    public $short_sku;
    public $publisher;
    public $isbn13;
    public $date_published;
    public $author_id;
    public $retail_w_gst;
    public $activated;

    public $categoriesSelected = [];
    public $image;
    public $existingImage;
    public $newImage;

    protected $listeners = ['categoriesSelected' => 'setCategories'];

    public function setCategories($categories)
    {
        $this->categoriesSelected = $categories;
    }

    public function mount($id)
    {
        $this->bookId = $id;
        $book = Book::findOrFail($id);

        $this->title['en'] = $book->getTranslationOrNew('en')->title;
        $this->title['ms'] = $book->getTranslationOrNew('ms')->title;
        $this->description['en'] = $book->getTranslationOrNew('en')->description;
        $this->description['ms'] = $book->getTranslationOrNew('ms')->description;
        $this->short_sku = $book->short_sku;
        $this->publisher = $book->publisher;
        $this->isbn13 = $book->isbn13;
        $this->date_published = $book->date_published;
        $this->retail_w_gst = $book->retail_w_gst;
        $this->activated = $book->activated;
        $this->existingImage = $book->image;
        $this->categoriesSelected = $book->categories->pluck('id')->toArray();
        $this->author_id = $book->authors->first()->id ?? 0;
    }

    public function render()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('livewire.admin.books.edit', [
            'categories' => $categories ?? [],
            'authors' => $authors ?? [],
        ])->layout('layouts.admin');
    }

    public function save()
    {
        $this->validate([
            'title.*' => 'required|string|max:255',
            'description.*' => 'required|string|max:255',
            'short_sku' => 'nullable|string|max:50',
            'publisher' => 'nullable|string|max:255',
            'isbn13' => 'nullable|string|max:13',
            'date_published' => 'nullable|date',
            'retail_w_gst' => 'required|numeric|min:0',
            'newImage' => 'nullable|image|max:2048',
            'categoriesSelected' => 'required|array',
            'author_id' => 'required|numeric',
        ]);

        $book = Book::findOrFail($this->bookId);

        if ($this->newImage) {
            if ($this->existingImage) {
                $book->image()->delete();
            }
            $book->image()->create([
                'url' => $this->newImage->store('books', 'public'),
            ]);
        }

        $book->short_sku = $this->short_sku;
        $book->publisher = $this->publisher;
        $book->isbn13 = $this->isbn13;
        $book->date_published = $this->date_published;
        $book->retail_w_gst = $this->retail_w_gst;
        $book->activated = $this->activated;
        $book->fill([
            'en' => [
                'title' => $this->title['en'],
                'description' => $this->description['en'],
            ],
            'ms' => [
                'title' => $this->title['ms'],
                'description' => $this->description['ms'],
            ],
        ]);
        $book->save();

        $book->categories()->sync($this->categoriesSelected);
        $book->authors()->sync($this->author_id);

        Toaster::success('Book updated successfully');
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
        Toaster::success('Image removed successfully');
    }
}
