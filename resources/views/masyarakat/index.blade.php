@extends('master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Masyarakat</h2>
        </div>
    </div>
  </div>
  <br>

  <table class="table table-bordered">
      <thead>
          <tr>
            <th width='50px' class="text-center">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Nik</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Alamat</th>
            <th width='100px' class="text-center">No. Hp</th>
          </tr>
      </thead>
      <tbody>
        @foreach($masyarakats as $masyarakat)
        <tr>
        <td width='50px' class="text-center">{{ $loop->iteration }}</td>
        <td width='400px' class="text-center">{{ $masyarakat->name }}</td>
        <td width='400px' class="text-center">{{ $masyarakat->nik }}</td>
        <td width='400px' class="text-center">{{ $masyarakat->jenis_kelamin }}</td>
        <td width='400px' class="text-center">{{ $masyarakat->alamat }}</td>
        <td width='400px' class="text-center">{{ $masyarakat->phone }}</td>
        </tr>
        @endforeach
      </tbody>

  </table>


@endsection
