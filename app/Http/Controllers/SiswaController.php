<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Requests\EditSiswaRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TambahSiswaRequest;

class SiswaController extends Controller
{
    function index(Request $request)
    {
        $cari = $request->cari;
        if (isset($request->cari)) {
            $sql = Siswa::orderBy('id', 'desc')
                ->where('nama', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $sql = Siswa::orderBy('id', 'desc')->get();
        }
        return view('siswa.index', ['siswa' => $sql]);
    }

    function create()
    {
        return view('siswa.tambah');
    }

    function store(TambahSiswaRequest $request)
    {
        $sql = Siswa::create($request->all());
        if ($sql) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Data Siswa Berhasil!');
        }

        return redirect('/siswa');
    }

    function edit($id)
    {
        $sql = Siswa::findOrFail($id);
        return view('siswa.edit', ['siswa' => $sql]);
    }

    function update(EditSiswaRequest $request, $id)
    {
        $sql = Siswa::findOrFail($id);
        $update = $sql->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Data Siswa Berhasil!!!');
        }

        return redirect('/siswa');
    }

    function delete($id)
    {
        $sql = Siswa::findOrFail($id);
        return view('siswa.hapus', ['siswa' => $sql]);
    }

    function destroy($id)
    {
        $sql = Siswa::findOrFail($id);
        $destroy = $sql->delete();
        if ($destroy) {
            Session::flash('status', 'success');
            Session::flash('message', 'Hapus Data Siswa Berhasil!!!');
        }

        return redirect('/siswa');
    }
}
