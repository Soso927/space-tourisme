<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Créer les permissions
    Permission::create(['name' => 'gestionnaire planetes']);
    Permission::create(['name' => 'gestionnaire equipages']);
    Permission::create(['name' => 'gestionnaire technologies']);
    Permission::create(['name' => 'gestionnaire users']);
    
    // Créer les rôles
    $admin = Role::create(['name' => 'admin']);
    $manager = Role::create(['name' => 'manager']);
    
    // Assigner toutes les permissions à admin
    $admin->givePermissionTo(Permission::all());
    
    // Manager a accès sauf aux users
    $manager->givePermissionTo(['manage planets', 'manage crew', 'manage technologies']);
    }
}
