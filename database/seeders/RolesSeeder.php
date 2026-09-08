<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();

        $roles = [
            [
                'id' => 1,
                'name' => 'superadmin',
                'guard_name' => 'admin',
                'created_at' => '2023-01-17 23:50:17',
                'updated_at' => null
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'guard_name' => 'admin',
                'created_at' => '2023-01-17 23:50:17',
                'updated_at' => null
            ]
        ];

        DB::table('roles')->insert($roles);

    }
}
