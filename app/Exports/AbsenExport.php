<?php

namespace App\Exports;

use App\Models\Absen;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AbsenExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('excel.exceltoday', [
            'absens' => Absen::where('tanggal', Carbon::today())->get()
        ]);
    }
}
