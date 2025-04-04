<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Tsutaya\Category;
use Masmerise\Toaster\Toaster;

class Edit extends Component
{
    public $category;
    public $name = [
        'en' => '',
        'ms' => '',
    ];

    public function render()
    {
        return view('livewire.admin.categories.create-edit', [
            'title' => 'Edit Category',
        ])->layout('layouts.admin');
    }

    public function mount($id)
    {
        $this->category = Category::find($id);
        $this->name['en'] = $this->category->getTranslationOrNew('en')->name;
        $this->name['ms'] = $this->category->getTranslationOrNew('ms')->name;
    }

    public function save()
    {
        $this->validate([
            'name.en' => 'required|string|max:255',
            'name.ms' => 'required|string|max:255',
        ]);

        $this->category->update([
            'en' => ['name' => $this->name['en']],
            'ms' => ['name' => $this->name['ms']],
        ]);

        Toaster::success('Category updated successfully');
        return redirect()->route('admin.categories.index');
    }
}
