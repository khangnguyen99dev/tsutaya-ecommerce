<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class CheckoutPage extends Component
{
    public function render()
    {
        return view('livewire.clients.checkout-page')->layout('layouts.app');
    }
}
