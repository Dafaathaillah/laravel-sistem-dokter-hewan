<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Administrator',
                'role' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('adminsecret'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Customer',
                'role' => 'customer',
                'email' => 'customer@mail.com',
                'password' => Hash::make('customersecret'),
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
