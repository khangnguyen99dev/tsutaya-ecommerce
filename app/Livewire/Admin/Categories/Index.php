<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Tsutaya\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $sortField = 'created_at';
    public $sortDirection = 'desc';

    protected $queryString = ['search', 'sortField', 'sortDirection'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
        }

        Toaster::success('Category deleted successfully.');
    }
    
    public function render()
    {
        $query = Category::query();     

        if ($this->search) {
            $query->whereTranslationLike("name", '%' . $this->search . '%');
        }

        $categories = $query->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.admin.categories.index', [
            'categories' => $categories
        ])->layout('layouts.admin');
    }


    
}
