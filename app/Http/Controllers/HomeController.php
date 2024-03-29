<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pegawaiModel= new Pegawai();
        $pegawai=$pegawaiModel->getAllPegawai();
        return view('home', compact('pegawai'));
    }
}