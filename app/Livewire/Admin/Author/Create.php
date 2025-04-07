<?php

namespace App\Livewire\Admin\Author;

use Livewire\Component;
use App\Models\Tsutaya\Author;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.admin.author.create-edit',[
            'title' => 'Create Author',
        ])
            ->layout('layouts.admin');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        Author::create([
            'name' => $this->name,
        ]);

        Toaster::success('Author created successfully');
        return redirect()->route('admin.authors.index');
    }
}
