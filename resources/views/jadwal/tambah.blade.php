@extends('layout.main')
@section('title', 'Tambah Jadwal')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card my-4" style="width: 500px;">
            <div class="card-header">
                <center>
                    <h3>Form Tambah Jadwal</h3>
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
                <form action="/tambah-jadwal" method="POST">
                    @csrf
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Nama Siswa</span>
                        <select name="nama_siswa" class="form-select" data-placeholder="Pilih Siswa">
                            <option></option>
                            @foreach ($siswa as $data)
                                <option value="{{ $data->nama }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Program Kursus</span>
                        <select name="nama_program" id="" class="form-select"
                            data-placeholder="Pilih Program Kursus">
                            <option></option>
                            @foreach ($program as $item)
                                <option value="{{ $item->program }}">{{ $item->program }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text" style="width: 170px;">Materi</span>
                        <input type="text" class="form-control" name="materi">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="width: 170px;">Status</span>
                        <select name="status" id="" class="form-select" data-placeholder="Pilih Status">
                            <option></option>
                            <option value="0">Belum Selesai</option>
                            <option value="1">Selesai</option>
                        </select>
                    </div>
                    <div class="mb-1">
                        <center>
                            <a href="/jadwal" class="btn btn-secondary mb-y">Kembali</a>
                            <a href="/jadwal_tambah" class="btn btn-danger mb-y">Batal</a>
                            <button class="btn btn-success my-2" type="submit">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $(".form-select").select2({
                theme: "bootstrap-5",
            });
        });
    </script>
@endpush
