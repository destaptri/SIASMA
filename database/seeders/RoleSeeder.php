<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'alumni', 'display_name' => 'Alumni', 'description' => 'Role for alumni']);
        Role::create(['name' => 'admin', 'display_name' => 'Admin', 'description' => 'Role for admin']);
        Role::create(['name' => 'kepala_sekolah', 'display_name' => 'Kepala Sekolah', 'description' => 'Role for kepala sekolah']);
    }
}
