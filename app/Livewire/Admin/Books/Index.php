<?php

namespace App\Livewire\Admin\Books;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Tsutaya\Book;

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
    
    public function deleteBook($id)
    {
        $book = Book::find($id);
        if ($book) {
            $book->delete();
            session()->flash('message', 'Book deleted successfully.');
            $this->dispatch('showAlert', 'Book deleted successfully.');
        }
    }
    
    public function render()
    {
        $books = Book::whereTranslation("title", 'like', '%' . $this->search . '%')
                    ->whereTranslation("description", 'like', '%' . $this->search . '%')
                    // ->where("author", 'like', '%' . $this->search . '%')
                    ->orWhere('isbn13', 'like', '%' . $this->search . '%')
                    ->orderBy($this->sortField, $this->sortDirection)
                    ->paginate($this->perPage);
                    
        return view('livewire.admin.books.index', [
            'books' => $books
        ])->layout('layouts.admin');
    }
}
