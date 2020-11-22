<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absen;
use Carbon\Carbon;

class Absens extends Component
{
    public $absen;

    public function render()
    {
        $this->absen = Absen::where('tanggal', Carbon::today())->get();
        return view('livewire.absens');
    }
}
