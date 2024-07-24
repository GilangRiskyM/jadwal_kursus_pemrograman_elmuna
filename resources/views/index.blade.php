@extends('layout.main')
@section('title', 'Dashboard')

@section('content')
    <h1 class="my-3">Dashboard</h1>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-2">
                    <div class="card-body">
                        <center>
                            <b>Data Siswa</b>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $data)
                                        <tr>
                                            <td>{{ $data->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/siswa" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card-body">
                        <center>
                            <b>Program Kursus</b>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Program Kursus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($program as $item)
                                        <tr>
                                            <td>{{ $item->program }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/program" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
