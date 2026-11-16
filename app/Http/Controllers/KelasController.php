<?php

namespace App\Http\Controllers;
use App\Models\kelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data = kelas::all();
        return view('kelas.index', compact('data'));
    }
}
