@extends('layout.main')
@section('title', 'Edit Jadwal')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-4" style="width: 500px;">
            <div class="card-header">
                <center>
                    <h3>Form Edit Jadwal</h3>
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
                <form action="/update-jadwal/{{ $data->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Nama Siswa</span>
                        <input type="text" class="form-control" value="{{ $data->nama_siswa }}" readonly>
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Program Kursus</span>
                        <input type="text" class="form-control" value="{{ $data->nama_program }}" readonly>
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Materi</span>
                        <input type="text" class="form-control" name="materi" value="{{ $data->materi }}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 170px;">Status</span>
                        <select name="status" id="" class="form-select">
                            <option value="1" {{ $data->status == 1 ? 'selected' : null }}>Selesai</option>
                            <option value="0" {{ $data->status == 0 ? 'selected' : null }}>Belum Selesai</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <center>
                            <a href="/jadwal" class="btn btn-secondary mx-5">Kembali</a>
                            <button class="btn btn-success mx-5" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
