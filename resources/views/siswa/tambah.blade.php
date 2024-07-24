@extends('layout.main')
@section('title', 'Tambah Data Siswa')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-4" style="width: 500px;">
            <div class="card-header">
                <center>
                    <h3>Form Tambah Data Siswa</h3>
                </center>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger mx-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/tambah-siswa" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 170px;">Nama Siswa</span>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-1">
                        <center>
                            <a href="/siswa" class="btn btn-secondary">Kembali</a>
                            <button class="btn btn-danger mx-5" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
