<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;


class KurikulumController extends Controller
{
    public function index()
{
    $data = kurikulum::all();
    return view('kurikulum.index', compact('data'));
}
    
}
