<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{

    public $title = 'Post title...';
    public $start = '2024-01-17';

    public function save()
    {
        error_log('save with ' . $this->title . ' and ' . $this->start);
    }
    
    public function render()
    {
        return view('livewire.create-post');
    }
}
