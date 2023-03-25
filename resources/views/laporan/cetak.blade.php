<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        img{
            height: 100px;
        }
        .thead{
            background-color: #3B82F6;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="title text-center mb-5">
            <h2>Laporan Layanan Pengaduan
            </h2>
        </div>
        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th class="col">No</th>
                    <th class="col">Nik</th>
                    <th class="col">Isi Laporan</th>
                    <th class="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->user_nik }}</td>
                        <td>{{ $item->isi_laporan }}</td>
                        <td>{{ $item->tgl_pengaduan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
