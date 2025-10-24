<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Toujours vider le cache interne de Spatie avant d'altérer la matrice
        app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        // Permissions liées aux planetes
        $perms = [
            'planets.view',
            'planets.create',
            'planets.edit',
            'planets.delete',
            'planets.publish',
            'users.manage',
        ];

        foreach ($perms as $p) {
            Permission::firstOrCreate(['name' => $p]);
        }

        // Rôles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);
        $author = Role::firstOrCreate(['name' => 'author']);
        $viewer = Role::firstOrCreate(['name' => 'viewer']);

        // Matrice rôles → permissions
        $admin->syncPermissions(Permission::all());
        $editor->syncPermissions(['planets.view', 'planets.create', 'planets.edit', 'planets.publish']);
        $author->syncPermissions(['planets.view', 'planets.create', 'planets.edit']);
        $viewer->syncPermissions(['planets.view']);

        // Rafraîchir le cache des permissions
        app(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }
}