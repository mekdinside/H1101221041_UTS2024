<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawaiModel= new Pegawai();
        $pegawai=$pegawaiModel->getAllPegawai();
        return view('pegawai', compact('pegawai'));
    }
}
