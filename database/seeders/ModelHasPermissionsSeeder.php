<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModelHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('role_has_permissions')->truncate();

        $rolePermissions = [
            // Superadmin (role_id = 1) permissions
            [1, 1], [2, 1], [3, 1], [4, 1], [5, 1], [6, 1], [7, 1], [8, 1], [9, 1], [10, 1],
            [11, 1], [16, 1], [17, 1], [18, 1], [19, 1], [20, 1], [21, 1], [29, 1], [30, 1],
            [31, 1], [32, 1], [33, 1], [34, 1], [35, 1], [36, 1], [37, 1], [38, 1], [39, 1],
            [40, 1], [41, 1], [42, 1], [46, 1], [47, 1], [48, 1], [49, 1], [50, 1], [51, 1],
            [52, 1], [53, 1], [55, 1], [56, 1], [57, 1], [58, 1], [59, 1], [60, 1], [64, 1],
            [65, 1], [66, 1], [67, 1], [68, 1],

            // Admin (role_id = 2) permissions
            [5, 2], [8, 2], [16, 2], [17, 2], [18, 2], [19, 2], [20, 2], [21, 2], [29, 2]
        ];

        $insertData = array_map(function($item) {
            return [
                'permission_id' => $item[0],
                'role_id' => $item[1]
            ];
        }, $rolePermissions);

        DB::table('role_has_permissions')->insert($insertData);

    }
}
