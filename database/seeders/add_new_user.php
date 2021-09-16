<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class add_new_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=  User::create([
            'name' => 'Hulu App Admin',
            'email' => 'user@user.com',
            'password' => Hash::make('adminadmin'),
            'type'=>1,
        ]);

        $role = Role::create(['name' => 'Super Admin']);
        $user->assignRole($role->name);
    }
}
