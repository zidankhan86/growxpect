<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $superadminRole = Role::firstOrCreate(
            ['name' => 'superadmin'],
            ['guard_name' => 'admin']
        );

        $adminRole = Role::firstOrCreate(
            ['name' => 'admin'],
            ['guard_name' => 'admin']
        );

        $permissions = Permission::all();

        $superadminRole->syncPermissions($permissions);
        $adminRole->syncPermissions($permissions);
    }
}
