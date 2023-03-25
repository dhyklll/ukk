@extends('master')

@section('content')
@if ($pengaduan->status == 'pending')
<form action="{{ route('verifikasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
            <div class="card">
                {{-- <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h4 class="mb-0">Berikan Tanggapan</h4>
                    </div>
                </div> --}}
                <div class="card-body pt-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            {{-- <div class="form-group">
                                <strong>Tanggapan</strong>
                                <textarea
                                class="form-control"
                                rows="8" type="text" placeholder="Isi Tanggapan Anda" value="{{ old('description')}}"
                                name="tanggapan" required></textarea>
                            </div><br>
                            <div class="form-group">
                                <strong>Tgl Tanggapan</strong>
                                <input type="date" name="tgl_tanggapan" class="form-control" placeholder="Tanggal Tanggapan" required>
                            </div><br>
                            <div class="form-group">
                                <strong>Status</strong>
                                <select
                                class="form-control"
                                name="status" required>
                                <option value="pending">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                <option value="terverifikasi">Terverifikasi</option>
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <input type="text" name="tanggapan" value="terverifikasi" hidden>
                            </div>
                            <div class="form-group">
                                <input type="date" name="tgl_tanggapan" value="2023-03-24" hidden>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="status" value="terverifikasi" hidden>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }} ">
                            </div>
                        </div>
                    </div><br>
                    <button class="btn btn-primary data-submit mr-1">Verifikasi</button>
                </div>
            </div>
        </div>
    </div>
</form>
@elseif($pengaduan->status == 'terverifikasi')
<form action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h4 class="mb-0">Berikan Tanggapan</h4>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tanggapan</strong>
                                <textarea
                                class="form-control"
                                rows="8" type="text" placeholder="Isi Tanggapan Anda" value="{{ old('description')}}"
                                name="tanggapan" required></textarea>
                            </div><br>
                            <div class="form-group">
                                <strong>Tgl Tanggapan</strong>
                                <input type="date" name="tgl_tanggapan" class="form-control" placeholder="Tanggal Tanggapan" required>
                            </div><br>
                            <div class="form-group">
                                <strong>Status</strong>
                                <select
                                class="form-control"
                                name="status" required>
                                <option value="pending">Pending</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <input type="hidden" name="status" value="terverifikasi" hidden>
                            </div> --}}

                            <div class="form-group">
                                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }} ">
                            </div>
                        </div>
                    </div><br>
                    <button class="btn btn-primary data-submit mr-1">Tanggapin</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endif


@endsection
