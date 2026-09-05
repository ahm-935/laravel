<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use App\Models\Role;
=======
>>>>>>> f5e64f3 (sparkAdmin templating on L13)
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        User::factory(10)->create();
        Role::factory()->create();

        // User::factory(10)->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     RoleSeeder::class,
        // ]);
=======
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> f5e64f3 (sparkAdmin templating on L13)
=======
        User::factory(30)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 12840fa (db data fetch)
    }
}
