<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Guru;

class Gurus extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.gurus', [
            'guru' => Guru::paginate(10)
        ]);
    }
}
