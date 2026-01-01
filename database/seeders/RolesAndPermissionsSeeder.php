<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
         // 🔐 Permissions
        $permissions = [
            // Posts
            'posts.create',
            'posts.edit',
            'posts.publish',
            'posts.delete',

            // Users
            'users.create',
            'users.edit',
            'users.delete',
            'users.promote',
            'users.demote',

            // Roles
            'roles.create',
            'roles.edit',
            'roles.delete',

            // Analytics
            'analytics.view',

            // Featured Editions
            'featured-edition.manage',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // 🧑‍💼 Roles
        $admin = Role::firstOrCreate(['name' => 'Administrator']);
        $editor = Role::firstOrCreate(['name' => 'Editor']);
        $author = Role::firstOrCreate(['name' => 'Author']);

        // 👑 Assign permissions
        $admin->givePermissionTo(Permission::all());

        $editor->givePermissionTo([
            'posts.create',
            'posts.edit',
            'posts.publish',
        ]);

        $author->givePermissionTo([
            'posts.create',
        ]);
    }
}
