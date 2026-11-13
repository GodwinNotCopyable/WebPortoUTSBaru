<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Website Portfolio Pribadi',
                'slug' => 'website-portfolio-pribadi',
                'summary' => 'Website portfolio personal untuk menampilkan profil, skill, dan proyek unggulan.',
                'description' => 'Proyek ini dibangun dengan Laravel dan Tailwind CSS untuk membuat halaman profil yang cepat, bersih, dan mudah dikelola melalui dashboard admin.',
                'thumbnail' => null,
                'project_url' => 'null',
                'github_url' => 'https://github.com/GodwinNotCopyable/WebPortoUTSBaru',
                'is_published' => true,
            ],
            [
                'title' => 'Sistem dan Database Rumah Sakit',
                'slug' => 'sistem-database-rs',
                'summary' => 'Aplikasi management sederhana untuk rumah sakit.',
                'description' => 'Fitur utama mencakup dashboard, manajemen pasien&dokter, katalog obat&farmasi',
                'thumbnail' => null,
                'project_url' => null,
                'github_url' => 'https://github.com/GodwinNotCopyable/DataBase_HospitalSystem',
                'is_published' => true,
            ],
            [
                'title' => 'Web Platform Konsultasi Thesis',
                'slug' => 'tierlog',
                'summary' => 'platform untuk membantu komunikasi dan konsultasi antara mahasiswa dan dosen',
                'description' => 'Platform dibagi untuk 2 pengguna, yaitu mahasiswa dan dosen. Mahasiswa dapat upload thesis versi terbaru, upload revisi, upload audio sesi konsultasi sebelumnya, dan minta bantuan AI. Dosen dapat menerima, menolak revisi maupun memberi komentar',
                'thumbnail' => null,
                'project_url' => null,
                'github_url' => 'https://github.com/cruzhgggggg-coder/TIERLOG_REACTGO',
                'is_published' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}
