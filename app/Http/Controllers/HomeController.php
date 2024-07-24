<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Siswa;

class HomeController extends Controller
{
    function index()
    {
        $siswa = Siswa::get();
        $program = Program::get();
        return view('index', [
            'siswa' => $siswa,
            'program' => $program
        ]);
    }
}
