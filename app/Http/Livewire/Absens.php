<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absen;

class Absens extends Component
{
    public $absen;
    public function render()
    {
        $this->absen = Absen::get();
        return view('livewire.absens');
    }
}
