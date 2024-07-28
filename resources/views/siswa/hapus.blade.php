@extends('layout.main')
@section('title', 'Hapus Data Siswa')
@section('content')
    <center>
        <h2>Hapus Data Siswa</h2>
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
                        <td>{{ $siswa->nama }}</td>
                    </tr>
                </table>
                <div class="mt-3">
                    <form action="/destroy-siswa/{{ $siswa->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="/siswa" class="btn btn-secondary mx-3 mb-2">Kembali</a>
                        <button class="btn btn-danger mx-3" type="submit">Hapus</button>
                    </form>
                </div>
            </h4>
        </center>
    </div>
@endsection
