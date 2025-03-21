<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'publish']);
        Permission::create(['name' => 'unpublish']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([Permission::all()]);

        $role = Role::create(['name' => 'customer']);
        $role->givePermissionTo(Permission::all());

        $user1 = new User;
        $user1->first_name = 'Admin';
        $user1->last_name = 'User';
        // $user1->username = 'admin';
        $user1->phone_no = '+923069282622';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('admin1234');
        $user1->email_verified_at = now();
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->first_name = 'Customer';
        $user2->last_name = 'Customer';
        // $user2->username = 'customer';
        $user2->phone_no = '+923069282623';
        $user2->email = 'customer@gmail.com';
        $user2->password = Hash::make('test123');
        $user2->email_verified_at = now();
        $user2->save();
        $user2->assignRole('customer');
    }
}
