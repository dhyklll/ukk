@extends('master')

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
        <div class="card card-custom">
            {{-- header --}}
            <div class="card-header border-bottom p-1">
                <div class="head-label">
                    <h4 class="mb-0">Show Petugas</h4>
                </div>
                <a href="{{ route('petugas.index') }}" class="dt-button create-new btn btn-warning">
                    <i data-feather="chevrons-left"></i>
                    Back
                </a>
            </div>
            {{-- Body --}}
            <div class="card-body pt-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nik :</strong>
                            {{ $petugas->nik }}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name :</strong>
                        {{ $petugas->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Username :</strong>
                        {{ $petugas->username }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Telepon :</strong>
                        {{ $petugas->phone }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role :</strong>
                        @if($petugas->role =='admin')
                        <span class="badge badge-sm bg-gradient-info"> {{ $petugas->role }}</span>
                        @elseif ($petugas->role =='masyarakat')
                        <span class="badge badge-sm bg-gradient-success"> {{ $petugas->role }}</span>
                        @elseif($petugas->role == 'petugas')
                        <span class="badge badge-sm bg-gradient-secondary"> {{ $petugas->role }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
