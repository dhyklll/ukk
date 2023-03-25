<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('user_nik');
			$table->string('user_id');
            $table->text('isi_laporan');
            $table->string('tgl_pengaduan');
            $table->string('foto');
            $table->enum('status', ['verifikasi', 'terverifikasi', 'pending', 'proses', 'selesai']);
            $table->enum('kategori', ['private', 'public']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
}
