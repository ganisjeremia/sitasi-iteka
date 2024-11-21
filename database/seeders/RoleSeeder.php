<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'mahasiswa']);
        Role::create(['name' => 'dosen']);
        Role::create(['name' => 'tendik']);
        Role::create(['name' => 'koorpro']);
    }
}