<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Absen;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AbsenExport;

class AbsenController extends Controller
{
    // function print pdf
    public function pdfToday()
    {
        $absen = Absen::where('tanggal', Carbon::today())->get();
        // return view('pdf.pdftoday', ['absen' => $absen]);
        $view = view('pdf.pdftoday', ['absen' => $absen]);
        // instantiate and use the dompdf class
        $options = new Options();
        $options->setIsHtml5ParserEnabled(true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A3', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('Absen_' . Date('Y-m-d') . '_.pdf');
    }

    function excelExport()
    {
        return Excel::download(new AbsenExport, 'absen_' . Date('Y-m-d') . '.xlsx');
    }
}
