<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

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
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'update post']);
        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'delete post']);

        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'update project']);
        Permission::create(['name' => 'view project']);
        Permission::create(['name' => 'delete project']);

        Permission::create(['name' => 'create event']);
        Permission::create(['name' => 'update event']);
        Permission::create(['name' => 'view event']);
        Permission::create(['name' => 'delete event']);

        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'update category']);
        Permission::create(['name' => 'view category']);
        Permission::create(['name' => 'delete category']);

        Permission::create(['name' => 'create account']);
        Permission::create(['name' => 'update account']);
        Permission::create(['name' => 'view account']);
        Permission::create(['name' => 'delete account']);

        Permission::create(['name' => 'create financial_report']);
        Permission::create(['name' => 'update financial_report']);
        Permission::create(['name' => 'view financial_report']);
        Permission::create(['name' => 'delete financial_report']);

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'delete role']);

        
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view contact']);
        Permission::create(['name' => 'delete contact']);


        $user = User::create([
            'name' => 'Loncey Tech',
            'email' => 'loncey@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('superadmin'),
        ]);
            $role1=Role::create(['name' => 'Super Admin']);
            $user->assignRole($role1);
            $role1->givePermissionTo(Permission::all());

        $user1 = User::create([
            'name' => 'Vithuran',
            'email' => 'vithu@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);
        $role2=Role::create(['name' => 'Admin'])
            ->givePermissionTo(['create post', 'update post','view post','delete post',
            'create project','update project','view project','delete project',
            'create user','update user','view user','delete user',
            'create event','update event','view event','delete event',
            'create category','update category','view category','delete category',
            'view contact','delete contact']);
        $user1->assignRole($role2);

        $user2=User::create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test'),
        ]);
        $role3=Role::create(['name' => 'Manager'])
          ->givePermissionTo([
                'create post', 'update post','view post',
                'create project','update project','view project',
                'view user',
                'create event','update event','view event',
                'create category','update category','view category',
                'view contact']);

        $user2->assignRole($role3);
    }
}
