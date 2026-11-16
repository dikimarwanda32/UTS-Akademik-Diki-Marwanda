<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index(){
        $data = Nilai::all();
        return view('Nilai.index', compact('data'));
    }
}
