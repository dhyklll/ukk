@extends('master')
@section('title')
    Home
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
  </ol>
  <h6 class="font-weight-bolder mb-0">User</h6>
</nav>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Data Semua Pengaduan</h2>
      </div>
  </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th width='50px' class="text-center">No</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Tanggal Pengaduan</th>
            <th class="text-center">Isi Pengaduan</th>
            <th class="text-center">Tanggapan</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengaduans as $pengaduan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center"><img src="{{ asset('public/uploads/' . $pengaduan->foto) }}" alt="foto" width='100px'></td>
                <td class="text-center">{{ date('d-M-Y H:i:s', strtotime($pengaduan->tgl_pengaduan)) }}</td>
                <td class="text-center">{{ $pengaduan->isi_laporan }}</td>
                <td class="text-center">{{ $pengaduan->tanggapans->tanggapan }}</td>
                <td class="text-center">
                    @if ($pengaduan->status == 'pending')
                    <span class="badge badge-sm bg-gradient-secondary">Pending</span>
                    @elseif($pengaduan->status == 'terverifikasi')
                    <span class="badge badge-sm bg-gradient-success">Terverifikasi</span>
                    @elseif($pengaduan->status == 'proses')
                    <span class="badge badge-sm bg-gradient-primary">Proses</span>
                    @elseif($pengaduan->status == 'selesai')
                    <span class="badge badge-sm bg-gradient-success">Selesai</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>

</table>


@endsection
