<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '2301010001',
            'nama' => 'Budi Santoso',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Jl. Merdeka No. 45, Jakarta',
            'kampus' => 'Universitas Contoh',
            'email' => 'budi.santoso@example.com',
            'status' => 'Aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}