@extends('layout.main')
@section('title', 'Program Kursus')
@section('content')
    @php
        $no = 1;
    @endphp
    <h1 class="my-3">Program Kursus</h1>
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="/program_tambah" class="btn btn-primary">Tambah Program Kursus</a>
            <hr>
            <div class="my-2 col-12 col-sm-8 col-md-4">
                <label for="" class="mb-2">Cari Data</label>
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control ml-2" name="cari" placeholder="Kata Kunci" required>
                        <button type="submit" class="btn btn-primary"><i class='bx bx-search-alt-2'></i> Cari</button>
                        <a href="/program" class="btn btn-danger">Batal</a>
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
                            <th>Nama Program Kursus</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($program as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->program }}</td>
                                <td>
                                    <center>
                                        <a href="/program_edit/{{ $data->id }}" class="btn btn-warning mx-2 my-2">
                                            <i class="bx bxs-edit"></i> Edit
                                        </a>
                                        <a href="/program_hapus/{{ $data->id }}" class="btn btn-danger mx-2 my-2">
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
