@extends('layout.main')
@section('title', 'Jadwal')
@section('content')
    @php
        $no = 1;
    @endphp
    <h1 class="my-3">Jadwal Kursus</h1>
    @if (Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <table>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                </tr>
            </table>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Program Kursus</th>
                            <th>Materi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->nama_program }}</td>
                                <td>{{ $item->materi }}</td>
                                @if ($item->status == 0)
                                    <td><span class="badge bg-danger">Belum Selesai</span></td>
                                @else
                                    <td><span class="badge bg-success">Selesai</span></td>
                                @endif
                                <td>
                                    <center>
                                        <a href="/jadwal_edit/{{ $item->id }}" class="btn btn-warning mx-2 my-2">
                                            <i class="bx bxs-edit"></i> Edit
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
