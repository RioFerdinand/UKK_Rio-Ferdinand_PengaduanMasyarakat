<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function index() {
        return view('layout.laporan.laporan');
    }

    public function generatePDF()
    {
        $pengaduan = Pengaduan::latest()->get();
        $tanggapan = Tanggapan::latest()->get();

        $data = [
            'pengaduan' => $pengaduan,
            'tanggapan' => $tanggapan
        ];

        $pdf = PDF::loadView('tanggapan.generate', $data);

        return $pdf->download('laporan pengaduan masyarakat.pdf');
    }
}
