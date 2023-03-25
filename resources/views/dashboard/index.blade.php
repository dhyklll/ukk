@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">
                    DASHBOARD <br>
                    <p class="title-dashboard">
                        PENGADUAN MASYARAKAT</p>
                </h3>
                <br>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <div class="card border-primary">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-primary mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bolder mb-0" id="lblTotalRDN">{{ $petugas }}</h4>
                        <p class="card-text font-small-3 mb-0">Petugas</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <div class="card border-info">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-info mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bolder mb-0" id="lblTotalRDNSuccess">{{ $masyarakat }}</h4>
                        <p class="card-text font-small-3 mb-0">Masyarakat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
        <div class="card border-success">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-success  mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path
                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bolder mb-0" id="lblTotalRDNReject">{{ $selesai }}</h4>
                        <p class="card-text font-small-3 mb-0">Pengaduan Sukses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card border-danger">
            <div class="card-body">
                <div class="media">
                    <div class="avatar bg-light-danger mr-2">
                        <div class="avatar-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                              </svg>
                        </div>
                    </div>
                    <div class="media-body my-auto">
                        <h4 class="font-weight-bolder mb-0" id="lblTotalRDNAno">{{ $pending }}</h4>
                        <p class="card-text font-small-3 mb-0">Pengaduan Pending</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
