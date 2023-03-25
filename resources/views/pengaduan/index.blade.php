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
          <h2>Data Pengaduan</h2>
      </div>
      @if (Auth::user()->role == 'masyarakat')
      <div class="pull-left">
        <a href="{{ route('pengaduan.create') }}" class="btn btn-success">Create</a>
    </div>
      @endif
  </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th width='50px' class="text-center">No</th>
            <th class="text-center">Foto</th>
            <th class="text-center">Tanggal Pengaduan</th>
            <th class="text-center">Status</th>
            <th width="50px" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengaduans as $pengaduan)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center"><img src="{{ asset('public/uploads/' . $pengaduan->foto) }}" alt="foto" width='100px'></td>
                <td class="text-center">{{ date('d-M-Y h:m:s', strtotime($pengaduan->tgl_pengaduan)) }}</td>
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
                <td class="text-center">
                    <form action="{{ route('pengaduan.destroy', $pengaduan->id) }}"
                        onsubmit="return confirm('Apakah Anda Yakin?');" method="POST">
                        <a href="{{ route('pengaduan.show', $pengaduan->id) }}" class="btn btn-warning btn-sm"
                            title="show">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye" viewBox="0 0 16 16">
                                <path
                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path
                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" title="delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>


@endsection
