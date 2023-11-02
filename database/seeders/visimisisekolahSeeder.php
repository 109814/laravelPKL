<?php

namespace Database\Seeders;

use App\Models\visimisisekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class visimisisekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        visimisisekolah::create([
            'visi' => '"Menjadi pusat pendidikan unggulan yang menginspirasi, membentuk karakter, dan menciptakan generasi yang berdaya saing global."',
            'misi' => '"Menjadi pusat pendidikan unggulan yang menginspirasi, membentuk karakter, dan menciptakan generasi yang berdaya saing global."'
        ]);
    }
}
