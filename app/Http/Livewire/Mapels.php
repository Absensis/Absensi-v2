<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Mapel;

class Mapels extends Component
{
    public $mapel;

    public function render()
    {
        $this->mapel = Mapel::get();
        return view('livewire.mapels');
    }
}
