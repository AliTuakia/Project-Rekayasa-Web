<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jjadwal kuliah dan nilai perkuliahan.',
                'teknologi' => 'laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi Optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Redesign Cover & Branding',
                'description' => 'Perancangan element grafis personal branding dan design cover sampul buku rekayasa web toko online',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Landing Page Company Profile',
                'description' => 'Pembuatan halaman web company profile untuk perusahaan jasa konstruksi',
                'teknologi' => 'WordPress & Elementor',
                'image' => 'project4.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Aplikasi Manajemen Proyek',
                'description' => 'Aplikasi berbasis web untuk mengelola proyek, tugas, dan kolaborasi tim.',
                'teknologi' => 'React & Node.js',
                'image' => 'project5.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jjadwal kuliah dan nilai perkuliahan.',
                'teknologi' => 'laravel & Bootstrap',
                'image' => 'project6.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi Optimalisasi struktur heading dan indexing halaman web toko online',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project7.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Redesign Cover & Branding',
                'description' => 'Perancangan element grafis personal branding dan design cover sampul buku rekayasa web toko online',
                'teknologi' => 'Figma & Canva',
                'image' => 'project8.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Landing Page Company Profile',
                'description' => 'Pembuatan halaman web company profile untuk perusahaan jasa konstruksi',
                'teknologi' => 'WordPress & Elementor',
                'image' => 'project9.jpg',
                'status' => 'Selesai',
            ],
            [
                'title' => 'Aplikasi Manajemen Proyek',
                'description' => 'Aplikasi berbasis web untuk mengelola proyek, tugas, dan kolaborasi tim.',
                'teknologi' => 'React & Node.js',
                'image' => 'project10.jpg',
                'status' => 'In Progress',
            ],
        ];

        foreach ($projects as $Project) {
            Project::create($Project);
        }
    }
}
