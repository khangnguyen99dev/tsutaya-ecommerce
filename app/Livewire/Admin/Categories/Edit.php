<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.edit')->layout('layouts.admin');
    }
}
