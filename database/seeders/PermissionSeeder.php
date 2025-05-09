<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // // Nonaktifkan foreign key checks sementara
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // // Hapus semua data dari tabel yang terkait dengan permissions dan roles
        // DB::table('model_has_permissions')->truncate();
        // DB::table('role_has_permissions')->truncate();
        // DB::table('model_has_roles')->truncate();
        // Permission::truncate();
        // Role::truncate();

        // // Aktifkan kembali foreign key checks
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $permissions = [
            'dashboard',

            // User Permission
            'user-management-view',
            'user-management-create',
            'user-management-edit',
            'user-management-delete',

            // Product
            'product-category-view',
            'product-category-create',
            'product-category-edit',
            'product-category-delete',

            // Product
            'product-view',
            'product-create',
            'product-edit',
            'product-delete',

            // Service
            'service-view',
            'service-create',
            'service-edit',
            'service-delete',

            // Project
            'project-view',
            'project-create',
            'project-edit',
            'project-delete',
        ];

        // Looping and Inserting Array's Permissions into Permission Table
        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission]
            );
        }

        // GIVE ALL PERMISSON TO SUPERADMIN
        $superAdmin = Role::updateOrCreate(['name' => 'Super Admin']);
        $permissions = Permission::all();
        $superAdmin->givePermissionTo($permissions);
    }
}
