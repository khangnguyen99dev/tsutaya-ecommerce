<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class BlogDetailPage extends Component
{
    public function render()
    {
        return view('livewire.clients.blog-detail-page')->layout('layouts.app');
    }
}
