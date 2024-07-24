@extends('layout.main')
@section('title', 'Daftar Siswa')
@section('content')
    @php
        $no = 1;
    @endphp
    <h1 class="my-3">Daftar Siswa</h1>
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="/siswa_tambah" class="btn btn-primary">Tambah Siswa</a>
            <hr>
            <div class="my-2 col-12 col-sm-8 col-md-4">
                <label for="" class="mb-2">Cari Data</label>
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control ml-2" name="cari" placeholder="Kata Kunci" required>
                        <button type="submit" class="btn btn-primary"><i class='bx bx-search-alt-2'></i> Cari</button>
                        <a href="/siswa" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Siswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>
                                    <center>
                                        <a href="/siswa/jadwal/{{ $data->nama }}" class="btn btn-info">
                                            <i class='bx bxs-calendar'></i> Jadwal
                                        </a>
                                        <a href="/siswa_edit/{{ $data->id }}" class="btn btn-warning mx-2 my-2">
                                            <i class="bx bxs-edit"></i> Edit
                                        </a>
                                        <a href="/siswa_hapus/{{ $data->id }}" class="btn btn-danger mx-2 my-2">
                                            <i class="bx bxs-trash"></i> Hapus
                                        </a>
                                    </center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
