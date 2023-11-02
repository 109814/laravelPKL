<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Permission::create(['name'=>'tambah-user']);
        // Permission::create(['name'=>'edit-user']);
        // Permission::create(['name'=>'hapus-user']);
        // Permission::create(['name'=>'lihat-user']);

        // Permission::create(['name'=>'tambah-tulisan']);
        // Permission::create(['name'=>'edit-tulisan']);
        // Permission::create(['name'=>'hapus-tulisan']);
        // Permission::create(['name'=>'lihat-tulisan']);

        // Role::create(['name'=>'superadmin']);
        // Role::create(['name'=>'admin']);
        // Role::create(['name'=>'pengguna']);

        // $rolesuperadmin = Role::findByName('superadmin');
        // $rolesuperadmin->givePermissionTo('tambah-user');
        // $rolesuperadmin->givePermissionTo('edit-user');
        // $rolesuperadmin->givePermissionTo('hapus-user');
        // $rolesuperadmin->givePermissionTo('lihat-user');


        // $roleadmin = Role::findByName('admin');
        // $roleadmin->givePermissionTo('tambah-user');
        // $roleadmin->givePermissionTo('lihat-user');
        // $roleadmin->givePermissionTo('tambah-tulisan');
        // $roleadmin->givePermissionTo('edit-tulisan');
        // $roleadmin->givePermissionTo('hapus-tulisan');
        // $roleadmin->givePermissionTo('lihat-tulisan');
        
        // $rolepengguna = Role::findByName('pengguna');
        // $rolepengguna->givePermissionTo('lihat-tulisan');
        

    }
}
