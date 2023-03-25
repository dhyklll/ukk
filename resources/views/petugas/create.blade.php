@extends('master')

@section('content')
<form action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 offset-lg-2">
            <div class="card">
                <div class="card-header border-bottom p-1">
                    <div class="head-label">
                        <h4 class="mb-0">Tambah Petugas</h4>
                    </div>
                    <a href="{{ route('petugas.index') }}" class="dt-button create-new btn btn-warning">
                        <i data-feather="chevrons-left"></i>
                        Back
                    </a>
                </div>
                <div class="card-body pt-2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nik</strong>
                                <input type="number" name="nik" class="form-control" placeholder="Nik" required>
                            </div>
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <strong>Username</strong>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <strong>Jenis Kelamin</strong>
                                <select name="jenis_kelamin" class="form-control" id="inputGroupSelect01" required>
                                    <option value="" selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            <div class="form-group">
                                <strong>Alamat</strong>
                                <input type="text" name="alamat" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <strong>Telepon</strong>
                                <input type="number" name="phone" class="form-control" placeholder="Telepon" required>
                            </div>
                            <div class="form-group">
                                <strong>Role</strong>
                                <select
                                class="form-control"
                                name="role" required>
                                <option value="admin">Admin</option>
                                <option value="masyarakat">Masyarakat</option>
                                <option value="petugas">Petugas</option>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <button class="btn btn-primary data-submit mr-1">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
