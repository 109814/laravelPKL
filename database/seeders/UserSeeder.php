<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $superadmin = User::create([
            'name' => 'jfn',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('jihad109814')
        ]);
        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name' => 'jfnn',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('jihad109814')
        ]);
        $admin->assignRole('admin');

        $pengguna = User::create([
            'name' => 'jfnn',
            'email' => 'pengguna@gmail.com',
            'password' => bcrypt('jihad109814')
        ]);
        $pengguna->assignRole('pengguna');
    }
}
