@extends('layout.main')
@section('title', 'Hapus Program Kursus')
@section('content')
    <center>
        <h2>Hapus Program Kursus</h2>
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
                        <td>Program Kursus</td>
                        <td>:</td>
                        <td>{{ $data->program }}</td>
                    </tr>
                </table>
                <div class="mt-3">
                    <form action="/destroy-program/{{ $data->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="/program" class="btn btn-secondary mx-3 mb-2">Kembali</a>
                        <button class="btn btn-danger mx-3" type="submit">Hapus</button>
                    </form>
                </div>
            </h4>
        </center>
    </div>
@endsection
