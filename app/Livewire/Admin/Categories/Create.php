<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Tsutaya\Category;
use Livewire\Component;
use Masmerise\Toaster\Toaster;
class Create extends Component
{
    public $name = [
        'en' => '',
        'ms' => '',
    ];

    public function render()
    {
        return view('livewire.admin.categories.create-edit', [
            'title' => 'Create Category',
        ])->layout('layouts.admin');
    }

    public function save()
    {
        $this->validate([
            'name.en' => 'required|string|max:255',
            'name.ms' => 'required|string|max:255',
        ]);

        Category::create([
           'en' => ['name' => $this->name['en']],
           'ms' => ['name' => $this->name['ms']],
        ]);

        Toaster::success('Category created successfully');
        return redirect()->route('admin.categories.index');
    }
}
