<?php

namespace App\Livewire\Admin\Author;

use App\Models\Tsutaya\Author;
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
    
    public function deleteAuthor($id)
    {
        $author = Author::find($id);
        if ($author) {
            $author->delete();
            Toaster::success('Author deleted successfully.');
        }
    }
    
    public function render()
    {
        $authors = Author::where('name', 'like', '%' . $this->search . '%')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate($this->perPage);

        return view('livewire.admin.author.index', [
            'authors' => $authors
        ])
        ->layout('layouts.admin');
    }
}
