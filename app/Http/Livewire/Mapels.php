<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Mapel;

class Mapels extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.mapels', [
            'mapel' => Mapel::paginate(10)
        ]);
    }
}
