<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditJadwalRequest;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TambahJadwalRequest;
use App\Http\Requests\EditJadwalSiswaRequest;

class JadwalController extends Controller
{
    function index(Request $request)
    {
        $cari = $request->cari;
        if (isset($request->cari)) {
            $sql = Jadwal::orderBy('id', 'desc')
                ->where('nama_siswa', 'LIKE', '%' . $cari . '%')
                ->orWhere('nama_program', 'LIKE', '%' . $cari . '%')
                ->orWhere('materi', 'LIKE', '%' . $cari . '%')
                ->orWhere('status', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $sql = Jadwal::orderBy('id', 'desc')->get();
        }

        return view('jadwal.index', ['jadwal' => $sql]);
    }

    function create()
    {
        $siswa = Siswa::get();
        $program = Program::get();

        return view('jadwal.tambah', [
            'siswa' => $siswa,
            'program' => $program
        ]);
    }

    function store(TambahJadwalRequest $request)
    {
        $sql = Jadwal::create($request->all());
        if ($sql) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Jadwal Berhasil!!!');
        }

        return redirect('/jadwal');
    }

    function edit($id)
    {
        $sql = Jadwal::findOrFail($id);
        $siswa = Siswa::get();
        $program = Program::get();

        return view('jadwal.edit', [
            'data' => $sql,
            'siswa' => $siswa,
            'program' => $program
        ]);
    }

    function update(EditJadwalRequest $request, $id)
    {
        $sql = Jadwal::findOrFail($id);
        $update = $sql->update($request->all());
        if ($sql) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Jadwal Berhasil!!!');
        }

        return redirect('/jadwal');
    }



    function delete($id)
    {
        $sql = Jadwal::findOrFail($id);

        return view('jadwal.hapus', ['data' => $sql]);
    }

    function destroy($id)
    {
        $sql = Jadwal::findOrFail($id);
        $destroy = $sql->delete();
        if ($destroy) {
            Session::flash('status', 'success');
            Session::flash('message', 'Hapus Data Jadwal Berhasil!!!');
        }

        return redirect('/jadwal');
    }
}
