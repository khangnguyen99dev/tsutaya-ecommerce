<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class AccountPage extends Component
{
    public function render()
    {
        return view('livewire.clients.account-page')->layout('layouts.app');
    }
}
