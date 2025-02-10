<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
         Role::create(['name' => 'user']);

         $admin = User::create([
             'name' => 'Admin',
             'email' => 'admin@example.com',
             'password' => Hash::make('password'),
         ]);
         $admin->roles()->attach(Role::where('name', 'admin')->first());

         $user = User::create([
             'name' => 'User',
             'email' => 'user@example.com',
             'password' => Hash::make('password'),
         ]);
         $user->roles()->attach(Role::where('name', 'user')->first());
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
