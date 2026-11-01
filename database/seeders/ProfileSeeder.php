<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Profile::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Godwin Clief Fernando Mclay',
                'job_title' => 'Full-Stack Developer',
                'about_me' => 'Saya mahasiswa jurusan Computer Science semester 5 di Bina Nusantara University dengan ketertarikan kuat pada pengembangan web dan aplikasi digital. Memiliki pemahaman mendasar hingga menengah dalam full-stack development, khususnya memanfaatkan framework modern untuk membangun solusi yang responsif dan efisien.',
                'phone' => '+62 812-1726-5659',
                'address' => 'Malang, Jawa Timur, Indonesia',
                'avatar' => null,
                'github_url' => 'https://github.com/GodwinNotCopyable',
                'linkedin_url' => 'https://www.linkedin.com/in/godwinclieffernandomclay',
            ]
        );
    }
}
