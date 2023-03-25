@extends('master')
@section('content')
@section('title')
    Tambah
@endsection


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Pengaduan</h2>
        </div>
    </div>
    <div class="pull-right">
        <a href="{{ route('pengaduan.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi Laporan</strong>
                <textarea name="isi_laporan" id="isi_laporan" rows="9" class="form-control"  placeholder="isi laporan"></textarea>
            </div>
            <div class="form-group">
                <strong>Tanggal Pengaduan</strong>
                <input type="date" name="tgl_pengaduan" class="form-control" placeholder="Tanggal Pengaduan">
            </div>
            <div class="form-group">
                <strong>Foto</strong>
                <input type="file" name="foto" class="form-control">
            </div>
            <input type="text" name="status" value="pending" hidden>
            <input type="text" name="kategori" value="private" hidden>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection
