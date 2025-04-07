<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.clients.homepage')->layout('layouts.app');
    }
}
