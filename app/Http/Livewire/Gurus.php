<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guru;

class Gurus extends Component
{
    public $guru;

    public function render()
    {
        $this->guru = Guru::get();
        return view('livewire.gurus');
    }

    
}
