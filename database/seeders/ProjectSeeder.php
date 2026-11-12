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
                'github_url' => 'https://https://github.com/GodwinNotCopyable/WebPortoUTSBaru',
                'is_published' => true,
            ],
            [
                'title' => 'Sistem dan Database Rumah Sakit',
                'slug' => 'sistem-database-rs',
                'summary' => 'Aplikasi management sederhana untuk rumah sakit.',
                'description' => 'Fitur utama mencakup dashboard, manajemen pasien&dokter, katalog obat&farmasi',
                'thumbnail' => null,
                'project_url' => null,
                'github_url' => 'https://https://github.com/GodwinNotCopyable/DataBase_HospitalSystem',
                'is_published' => true,
            ],
            [
                'title' => 'Web Platform Konsultasi Thesis',
                'slug' => 'tierlog',
                'summary' => 'Platform supervisi bimbingan tugas akhir berskala enterprise dengan arsitektur micro-service.',
                'description' => 'Membangun API Gateway menggunakan Go (Gin) yang menangani autentikasi JWT, manajemen sesi konsultasi, dan integrasi multi-provider AI (Groq Whisper, Gemini Vision, OpenAI, Anthropic). Merancang skema database MySQL menggunakan GORM serta mengimplementasikan WebSocket Hub untuk sinkronisasi real-time antara dashboard mahasiswa dan dosen. Fitur utama meliputi transkripsi audio otomatis dengan smart chunking untuk file >20MB, OCR catatan tulisan tangan via Gemini Vision, dan AI guardrails anti-halusinasi yang memastikan rekomendasi tetap sesuai masukan dosen.',
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
