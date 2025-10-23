<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignAdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        
        if ($user) {
            $user->assignRole('admin');
            $this->command->info("Rôle admin assigné à {$user->name}");
        } else {
            $this->command->error('Aucun utilisateur trouvé !');
        }
    }
}