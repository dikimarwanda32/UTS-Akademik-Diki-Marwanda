<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class JadwalController extends Controller
{
    public function index(){
        $data = jadwal::all();
        return view('jadwal.index', compact('data'));
    }
}
