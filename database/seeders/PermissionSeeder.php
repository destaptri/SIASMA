<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
/**
* Run the database seeds.
*/
    public function run(): void
    {
        $permissions = [
        'show-role',
        'create-role',
        'edit-role',
        'delete-role',
        'show-user',
        'create-user',
        'edit-user',
        'delete-user',
        'show-biodata',
        'create-biodata',
        'edit-biodata',
        'delete-biodata',
        'validate-biodata',
        'edit-profile',
        'show-laporan'
        ];
// Looping and Inserting Array's Permissions into PermissionTable
    foreach ($permissions as $permission) {
        Permission::create(['name' => $permission]);
    }
}
}