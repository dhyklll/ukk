<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $start_date = @$request->start_date != null ? $request->start_date : date('Y-m-d');
        $end_date   = @$request->end_date != null ? $request->end_date : date('Y-m-d');

        $laporans = Pengaduan::with('users')->get();
        // dd($laporans);
        if(!is_null($request->start_date) && !is_null($request->end_date)){
            $laporans =  Pengaduan::whereBetween('tgl_pengaduan', [Carbon::parse($request->start_date), Carbon::parse(date($request->end_date). ' 23:59:59')])->get();
        }
        // dd($laporans);
        return view('laporan.index', [
            'start_date' => $start_date,
            'end_date' => $end_date,
            'laporans' => $laporans,
        ]);
    }


    public function cetak_pdf(Request $request){

        $start_date = @$request->start_date != null ? $request->start_date : date('Y-m-d');
        $end_date   = @$request->end_date != null ? $request->end_date : date('Y-m-d');

        $pengaduan = Pengaduan::with('users')->get();
        // dd($pengaduan);
        if(!is_null($request->start_date) && !is_null($request->end_date)){
            $pengaduan =  Pengaduan::whereBetween('tgl_pengaduan', [Carbon::parse($request->start_date), Carbon::parse(date($request->end_date). ' 23:59:59')])->get();
        }

        $pdf = PDF::loadview('laporan.cetak', compact('pengaduan'));
        return $pdf->download('laporan.pdf');
    }
}
