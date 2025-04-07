<?php

namespace App\Livewire\Admin\Author;

use Livewire\Component;
use App\Models\Tsutaya\Author;
use Masmerise\Toaster\Toaster;


class Edit extends Component
{
    public $name;

    public $author;

    public function mount($id)
    {
        $this->author = Author::findOrFail($id);
        $this->name = $this->author->name;
    }

    public function render()
    {
        return view('livewire.admin.author.create-edit',[
            'title' => 'Edit Author',
        ])->layout('layouts.admin');
    }


    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->author->update([
            'name' => $this->name,
        ]);

        Toaster::success('Author updated successfully');
        return redirect()->route('admin.authors.index');
    }
}
