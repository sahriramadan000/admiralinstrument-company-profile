<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            $role = Role::whereName('Super Admin')->first();

            $user = User::whereUsername('superadmin')->first();
            if (!$user) {
                // Create new user
                $user = User::firstOrCreate([
                    'email'     => 'superadmin@gmail.com',
                    'name'      => 'Super Admin',
                    'nip'       => '0001',
                    'username'  => 'superadmin',
                    'password'  => Hash::make('12345678'),
                ]);
            }

            $permissions = Permission::pluck('id')->all();
            $role->syncPermissions($permissions);
            $user->assignRole([$role->id]);
            echo 'Admin user created' . PHP_EOL;

        } catch (\Throwable $th) {
            // Create message with echo
            echo 'Error : ' . $th->getMessage();
        }
    }
}
