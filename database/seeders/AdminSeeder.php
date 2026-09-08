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
        $superAdmin = Admin::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'image' => 'uploads/admin/2-665ff8415c1ab.png',
                'status' => 1,
            ]
        );

        $admin = Admin::updateOrCreate(
            ['email' => 'admin2@gmail.com'],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'image' => 'backend/image/default-user.png',
                'status' => 1,
            ]
        );

        $growxpectAdmin = Admin::updateOrCreate(
            ['email' => 'admin@growxpect.com'],
            [
                'name' => 'Growxpect Admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'image' => 'backend/image/default-user.png',
                'status' => 1,
            ]
        );

        $superAdmin->assignRole('superadmin');
        $admin->assignRole('admin');
        $growxpectAdmin->assignRole('superadmin');
    }
}
