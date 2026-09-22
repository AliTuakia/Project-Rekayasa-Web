@extends('layouts.app')

@section('title', 'Prodi SI')
@section('page-title', 'Profile')

@section('content')

    <div style="max-width: 1200px; margin: 0 auto; padding: 3rem 1rem;">

        <div style="display: flex; justify-content: center;">

            <div style="width: 100%; max-width: 700px;">

                <div style="text-align: center; margin-bottom: 1.5rem;">
                    <h3>Profile Mahasiswa</h3>
                </div>

                <div style="display: flex; justify-content: center; margin-bottom: 1.5rem;">
                    <img
                        src="{{ asset('images/fotoprofil.png') }}"
                        alt="Foto {{ $mahasiswa['nama'] }}"
                        style="width: 180px; height: 180px; object-fit: cover; object-position: center top; border-radius: 50%; border: 3px solid #dee2e6; display: block;"
                    >
                </div>

                <div style="background: #fff; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); padding: 1.5rem;">

                    <div style="display: flex; padding: 0.75rem 0; border-bottom: 1px solid #dee2e6;">
                        <div style="width: 40%; font-weight: bold;">Nama:</div>
                        <div style="width: 60%;">{{ $mahasiswa['nama'] }}</div>
                    </div>

                    <div style="display: flex; padding: 0.75rem 0; border-bottom: 1px solid #dee2e6;">
                        <div style="width: 40%; font-weight: bold;">NIM:</div>
                        <div style="width: 60%;">{{ $mahasiswa['nim'] }}</div>
                    </div>

                    <div style="display: flex; padding: 0.75rem 0; border-bottom: 1px solid #dee2e6;">
                        <div style="width: 40%; font-weight: bold;">Program Studi:</div>
                        <div style="width: 60%;">{{ $mahasiswa['prodi'] }}</div>
                    </div>

                    <div style="display: flex; padding: 0.75rem 0;">
                        <div style="width: 40%; font-weight: bold;">Kampus:</div>
                        <div style="width: 60%;">{{ $mahasiswa['kampus'] }}</div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection