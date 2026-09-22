<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700957',
            'nama' => 'Ali Rahmadan Tuakia',
            'prodi' => 'Sistem Informasi',
            'alamat' => 'Setu',
            'kampus' => 'Universitas Pamulang',
            'email' => 'alituakia20@gmail.com',
            'status' => 'Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}