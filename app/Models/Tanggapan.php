<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pengaduan_id',
        'tgl_tanggapan',
        'tanggapan',
        'petugas_id'
    ];

    public function pengaduan()
    {
    	return $this->hasOne(Pengaduan::class,'id', 'id');
    }
}
