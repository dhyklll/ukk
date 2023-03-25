<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_nik',
        'user_id',
        'tgl_pengaduan',
        'isi_laporan',
        'foto',
        'status',
        'kategori'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function tanggapans() {
        return $this->belongsTo(Tanggapan::class, 'id', 'id');
    }

    public function details() {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }
}
