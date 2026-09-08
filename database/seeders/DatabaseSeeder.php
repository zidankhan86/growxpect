<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            PermissionsSeeder::class,
            RoleHasPermissionsSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            SEOSeeder::class,
            SettingsSeeder::class,
            CustomPageSeeder::class,
            HomepageContentSeeder::class,
        ]);
    }
}
