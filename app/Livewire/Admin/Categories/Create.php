<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.create')->layout('layouts.admin');
    }
}
