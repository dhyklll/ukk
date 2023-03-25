<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index', [
            'pending' => Pengaduan::where('status', 'pending')->count(),
            'selesai' => Pengaduan::where('status', 'terverifikasi')->count(),
            'petugas' => User::where('role', '=', 'petugas')->count(),
            'masyarakat' => User::where('role', '=', 'masyarakat')->count(),
        ]);
    }
}
