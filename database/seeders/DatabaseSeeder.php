<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


            $this->call(RoleSeeder::class);
            $this->call(UserSeeder::class);


        // Role::create([
        //     'role_name' => 'superadmin',
        // ]);

        // Role::create([
        //     'role_name' => 'admin',
        // ]);

        // Role::create([
        //     'role_name' => 'pengguna',
        // ]);
        
        // User::factory(5)->create();
    }
}
