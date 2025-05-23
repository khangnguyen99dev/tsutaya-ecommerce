<?php

namespace App\Livewire\Clients;

use App\Models\Tsutaya\Author;
use App\Models\Tsutaya\Book;
use App\Models\Tsutaya\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ShopPage extends Component
{
    use WithPagination;

    public $search = '';
    public $page = 1;
    public $perPage = 10;
    public $sort = 'created_at';
    public $direction = 'desc';
    public $category_id = 0;
    public $min_price = 0;
    public $max_price = 10000000;

    protected $queryString = ['search', 'sort', 'direction', 'category_id', 'min_price', 'max_price'];

    protected $listeners = [
        'filter-by-price' => 'filterByPrice'
    ];

    public function mount()
    {
        $this->category_id = request()->get('category');
        $this->min_price = request()->get('min_price', 0);
        $this->max_price = request()->get('max_price', 10000000);
    }

    public function render()
    {
        $query = Book::whereTranslation("title", 'like', '%' . $this->search . '%')
            ->orWhereTranslation("description", 'like', '%' . $this->search . '%')
            ->orWhere('isbn13', 'like', '%' . $this->search . '%')
            ->where('activated', true)
            ->where('retail_w_gst', '>=', $this->min_price)
            ->where('retail_w_gst', '<=', $this->max_price)
            ->orderBy($this->sort, $this->direction);

        if ($this->category_id) {
            $query->whereHas('categories', function ($query) {
                $query->where('category_id', $this->category_id);
            });
        }

        $books = $query->paginate($this->perPage, ['*'], 'page', $this->page);
        $categories = Category::limit(10)->latest()->get();
        $authors = Author::limit(10)->latest()->get();

        return view('livewire.clients.shop-page', [
            'books' => $books,
            'categories' => $categories,
            'authors' => $authors
        ])->layout('layouts.app');
    }

    public function sortBy($field)
    {
        if ($this->sort === $field && $this->direction === 'asc')
            return;

        $this->sort = $field;
        $this->direction = $this->direction === 'asc' ? 'desc' : 'asc';
        $this->dispatch('sortBy', field: $field, direction: $this->direction);
    }

    public function changePage($page)
    {
        $this->page = $page;
        $this->dispatch('changePage', page: $page);
    }

    public function filterByCategory($categoryId)
    {
        if ($this->category_id === $categoryId)
            $this->category_id = 0;
        else
            $this->category_id = $categoryId;

        $this->dispatch('filterByCategory', categoryId: $categoryId);
    }

    public function filterByPrice($data = null)
    {
        if (is_array($data)) {
            $this->min_price = $data['min'];
            $this->max_price = $data['max'];
            $this->resetPage();
        }
    }
}
