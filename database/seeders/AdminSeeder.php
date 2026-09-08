<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Admin::create([
            'id' => 1,
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2022-07-25 05:09:47',
            'password' => Hash::make('password'),
            'image' => 'uploads/admin/2-665ff8415c1ab.png',
            'remember_token' => 'wArU8bg7sIvacA4XN3oHVijlS7yXn2Jy6Aew70dhQ1pcTUFYqGXkF7oOWDWe',
            'created_at' => '2022-07-25 05:09:47',
            'updated_at' => '2024-06-12 14:13:43',
            'status' => 1,
        ]);

        $admin = Admin::create([
            'id' => 2,
            'name' => 'Admin',
            'email' => 'admin2@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'image' => 'backend/image/default-user.png',
            'remember_token' => null,
            'created_at' => '2022-08-22 05:56:33',
            'updated_at' => '2022-08-22 05:56:33',
            'status' => 1,
        ]);

        $superAdmin->assignRole('superadmin');
        $admin->assignRole('admin');
    }
}
