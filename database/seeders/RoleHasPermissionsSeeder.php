<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(
            ['name' => 'superadmin'],
            ['guard_name' => 'admin']
        );

        $permissions = Permission::all();

        $adminRole->syncPermissions($permissions);
    }
}
