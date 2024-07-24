@extends('layout.main')
@section('title', 'Hapus Jadwal')
@section('content')
    <center>
        <h2>Hapus Jadwal</h2>
    </center>
    <div class="my-3">
        <center>
            <h3>Apakah anda yakin ingin menghapus data dibawah ini?</h3>
            <div class="alert alert-danger" role="alert">
                <h3><i class='bx bx-error'></i> Data yang dihapus tidak dapat dikembalikan!</h3>
            </div>
            <h4>
                <table>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>:</td>
                        <td>{{ $data->nama_siswa }}</td>
                    </tr>
                    <tr>
                        <td>Program Kursus</td>
                        <td>:</td>
                        <td>{{ $data->nama_program }}</td>
                    </tr>
                    <tr>
                        <td>Materi</td>
                        <td>:</td>
                        <td>{{ $data->materi }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        @if ($data->status == 0)
                            <td><span class="badge bg-danger">Belum Selesai</span></td>
                        @else
                            <td><span class="badge bg-success">Selesai</span></td>
                        @endif
                    </tr>
                </table>
                <div class="mt-3">
                    <form action="/destroy-jadwal/{{ $data->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="/jadwal" class="btn btn-secondary mx-3">Kembali</a>
                        <button class="btn btn-danger mx-3" type="submit">Hapus</button>
                    </form>
                </div>
            </h4>
        </center>
    </div>
@endsection
