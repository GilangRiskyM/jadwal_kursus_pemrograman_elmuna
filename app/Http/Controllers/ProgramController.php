<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProgramRequest;
use App\Models\Program;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\TambahProgramRequest;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index(Request $request)
    {
        $cari = $request->cari;
        if (isset($request->cari)) {
            $sql = Program::orderBy('id', 'desc')
                ->where('program', 'LIKE', '%' . $cari . '%')
                ->get();
        } else {
            $sql = Program::orderBy('id', 'desc')->get();
        }
        return view('program.index', ['program' => $sql]);
    }

    function create()
    {
        return view('program.tambah');
    }

    function store(TambahProgramRequest $request)
    {
        $sql = Program::create($request->all());
        if ($sql) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Program Kursus Berhasil!');
        }

        return redirect('/program');
    }

    function edit($id)
    {
        $sql = Program::findOrFail($id);
        return view('program.edit', ['data' => $sql]);
    }

    function update(EditProgramRequest $request, $id)
    {
        $sql = Program::findOrFail($id);
        $update = $sql->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Program Kursus Berhasil!');
        }

        return redirect('/program');
    }

    function delete($id)
    {
        $sql = Program::findOrFail($id);
        return view('program.hapus', ['data' => $sql]);
    }

    function destroy($id)
    {
        $sql = Program::findOrFail($id);
        $destroy = $sql->delete();
        if ($destroy) {
            Session::flash('status', 'success');
            Session::flash('message', 'Hapus Data Program Berhasil!!!');
        }

        return redirect('/program');
    }
}
