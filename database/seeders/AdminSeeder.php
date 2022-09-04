<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            "name" => "Admin",
            "email" => "admin@example.com",
        ], [
            "password" => Hash::make("admin"),
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'admin',
        ], [
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        $user->attachRole($admin);
    }
}
