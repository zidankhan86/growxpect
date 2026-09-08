<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permissions = [

            ['id' => 36, 'name' => 'admin.contact.index', 'group_name' => 'contact', 'guard_name' => 'admin', 'created_at' => '2024-06-01 00:24:41', 'updated_at' => '2024-06-01 00:37:14'],

            ['id' => 53, 'name' => 'admin.transaction.index', 'group_name' => 'transaction', 'guard_name' => 'admin', 'created_at' => '2024-06-04 18:01:05', 'updated_at' => '2024-06-04 18:01:05'],
            ['id' => 56, 'name' => 'admin.settings.home.content', 'group_name' => 'home-content', 'guard_name' => 'admin', 'created_at' => '2024-06-04 18:06:04', 'updated_at' => '2024-06-04 18:06:04'],
            ['id' => 58, 'name' => 'admin.settings.Smtp.mail', 'group_name' => 'settings', 'guard_name' => 'admin', 'created_at' => '2024-06-04 18:12:33', 'updated_at' => '2024-06-04 18:12:33'],
            ['id' => 59, 'name' => 'admin.roles.index', 'group_name' => 'roles', 'guard_name' => 'admin', 'created_at' => '2024-06-04 18:15:14', 'updated_at' => '2024-06-04 18:15:14'],
            ['id' => 60, 'name' => 'admin.customer.view', 'group_name' => 'customer', 'guard_name' => 'admin', 'created_at' => '2024-06-01 08:40:49', 'updated_at' => '2024-06-01 08:40:49'],
            ['id' => 64, 'name' => 'admin.user.password.edit', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => '2025-08-07 11:34:59', 'updated_at' => '2025-08-07 11:34:59'],
          ['id' => 73, 'name' => 'admin.page-settings.home-page', 'group_name' => 'page-settings', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],

            ['id' => 92, 'name' => 'admin.testimonial.index', 'group_name' => 'testimonial', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 93, 'name' => 'admin.testimonial.create', 'group_name' => 'testimonial', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 94, 'name' => 'admin.testimonial.store', 'group_name' => 'testimonial', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 95, 'name' => 'admin.testimonial.edit', 'group_name' => 'testimonial', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 96, 'name' => 'admin.testimonial.delete', 'group_name' => 'testimonial', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 97, 'name' => 'admin.shipping_method.index', 'group_name' => 'shipping-method', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 98, 'name' => 'admin.cpage.index', 'group_name' => 'custom-page', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 99, 'name' => 'admin.cpage.edit', 'group_name' => 'custom-page', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 101, 'name' => 'admin.cpage.view', 'group_name' => 'custom-page', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 102, 'name' => 'admin.settings.general', 'group_name' => 'settings', 'guard_name' => 'admin', 'created_at' => '2024-06-01 18:04:53', 'updated_at' => '2024-06-01 18:04:53'],
            ['id' => 124, 'name' => 'admin.seo.index', 'group_name' => 'seo', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 125, 'name' => 'admin.seo.edit', 'group_name' => 'seo', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 126, 'name' => 'admin.seo.view', 'group_name' => 'seo', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 127, 'name' => 'admin.seo.update', 'group_name' => 'seo', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 128, 'name' => 'admin.user.index', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 129, 'name' => 'admin.user.create', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 130, 'name' => 'admin.user.store', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 131, 'name' => 'admin.user.edit', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 132, 'name' => 'admin.user.update', 'group_name' => 'admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 133, 'name' => 'admin.cms.manage', 'group_name' => 'cms', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission['name'], 'guard_name' => $permission['guard_name']],
                ['group_name' => $permission['group_name']]
            );
        }

        Artisan::call('optimize:clear');
    }
}
