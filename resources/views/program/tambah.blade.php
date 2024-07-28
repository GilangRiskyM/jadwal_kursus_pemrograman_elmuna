@extends('layout.main')
@section('title', 'Tambah Program Kursus')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-4" style="width: 500px;">
            <div class="card-header">
                <center>
                    <h3>Form Tambah Program Kursus</h3>
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
                <form action="/tambah-program" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 170px;">Program Kursus</span>
                        <input type="text" class="form-control" name="program">
                    </div>
                    <div class="mb-1">
                        <center>
                            <a href="/program" class="btn btn-secondary mb-2">Kembali</a>
                            <button class="btn btn-danger mx-5 mb-2" type="reset">Batal</button>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
