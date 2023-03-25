@extends('master')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
      <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
        Detail Pengaduan
      </h2>


      <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
        @foreach ($pengaduan->details as $data)
          <div
            class="text-gray-800 text-sm font-semibold px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-400 ">
            <h4 class="mt-2">NIK : {{ $data->user_nik }}</h4>
            <h4 class="mt-2">Tanggal : {{ $data->created_at->format('l, d F Y - H:i:s') }}</h4>
            <h4 class="mt-2">Status :
                @if($data->status =='pending')
                <span class="badge badge-sm bg-gradient-secondary"> {{ $data->status }}</span>
                @elseif($data->status == 'proses')
                <span class="badge badge-sm bg-gradient-info"> {{ $data->status }}</span>
                @elseif ($data->status =='selesai')
                <span class="badge badge-sm bg-gradient-success"> {{ $data->status }}</span>
                @else
                <span
                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                    {{ $data->status }}
                    </span>
                @endif
            </h4>
          </div>

          <div class="px-4 py-3 mb-8 flex text-gray-800 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="relative hidden mr-3  md:block dark:text-gray-400">
              <h2 class="text-center mb-8 font-semibold">Foto</h2>
              <img class=" h-32 w-35 " src="{{ asset('public/uploads/'. $data->foto) }}" alt="foto" loading="lazy" />
            </div>

            <div class="text-center flex-1 dark:text-gray-400">
              <h2 class="mb-8 font-semibold">Keterangan</h2>
              <p class="text-gray-800 dark:text-gray-400">
                {{ $data->isi_laporan }}
              </p>
            </div>
          </div>
        @endforeach
          <div class="px-4 py-3 mb-8 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">

            <div class="text-center flex-1">
              <h2 class="mb-8 font-semibold">Tanggapan</h2>
              <p class="text-gray-800 dark:text-gray-400">

                @if (empty($tanggapan->tanggapan))
                Belum ada tanggapan
                @elseif ($data->status == 'pending')
                Belum ada tanggapan
                @elseif ($data->status == 'proses')
                {{ $tanggapan->tanggapan}}
                @elseif($data->status == 'selesai')
                {{ $tanggapan->tanggapan}}
                @endif
              </p>
            </div>
          </div>
        </div>
        @if (Auth::user()->role == 'admin')
        <div class="text-center my-2">
            <a href="{{ url('pengaduan/cetak', $pengaduan->id) }}"
              class="btn btn-danger">
              Export ke PDF
            </a>
          </div>
          <div class="text-center">
            <a href="{{ route('tanggapan.update', $pengaduan->id) }}" class="btn btn-primary">Verifikasi</a>
          </div>
          @if ($data->status == 'terverifikasi')
          <div class="text-center">
            <a href="{{ route('tanggapan.show', $pengaduan->id) }}"
              class="btn btn-primary">
              Berikan Tanggapan
            </a>
          </div>
          @endif
        @elseif(Auth::user()->role == 'petugas')
          <div class="text-center my-2">
            <a href="{{ url('pengaduan/cetak', $pengaduan->id) }}"
              class="btn btn-danger">
              Export ke PDF
            </a>
          </div>
          <div class="text-center">
            <a href="{{ route('tanggapan.update', $pengaduan->id) }}" class="btn btn-primary">Verifikasi</a>
          </div>
          @if ($data->status == 'terverifikasi')
          <div class="text-center">
            <a href="{{ route('tanggapan.show', $pengaduan->id) }}"
              class="btn btn-primary">
              Berikan Tanggapan
            </a>
          </div>
          @endif
        @endif

      </div>
  </main>
@endsection
