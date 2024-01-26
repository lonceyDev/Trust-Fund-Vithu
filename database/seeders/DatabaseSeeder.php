<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::create([
            'name' => 'Loncey Tech',
            'email' => 'loncey@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'),
        ]);
            $role1=Role::create(['name' => 'Super Admin']);
            $user->assignRole($role1);

        $user1 = User::create([
            'name' => 'Vithuran',
            'email' => 'vithu@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);
        $role2=Role::create(['name' => 'Admin']);
        $user1->assignRole($role2);

        $user2=User::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
        ]);
        $role3=Role::create(['name' => 'Manager']);
        $user2->assignRole($role3);
    }
}
