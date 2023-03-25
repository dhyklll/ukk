<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::latest()->paginate(5);
        return view('pengaduan.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'tgl_pengaduan' => 'required',
            'isi_laporan' => 'required'
        ]);

        $nik = Auth::user()->nik;
        $id = Auth::user()->id;
        $user_name = Auth::user()->name;

        $data = $request->all();
        $data['user_nik'] = $nik;
        $data['user_id'] = $id;

        if($image = $request->file('foto')){
            $destionationPath = 'public/uploads';
            $nameImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $nameImage);
            $data['foto'] = "$nameImage";
        }

        Pengaduan::create($data);
        return redirect()->route('pengaduan.index')->with('success', 'Berhasil Menambahkan Pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::with(['details', 'users'])->findOrFail($id);
        // dd($pengaduan);
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->first();
        // dd($pengaduan);

        return view('pengaduan.show', [
            'pengaduan' =>  $pengaduan,
            'tanggapan' =>  $tanggapan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        return redirect()->route('pengaduan.index')->with('success', 'Berhasil Menghapus Pengaduan!');
    }

    public function pdf($id)
    {
        $pengaduan = Pengaduan::with('users')->findOrFail($id);
        // dd($pengaduan);

        $pdf = PDF::loadview('pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }


}
