<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Jasur",
            'phone' => "998933926354",
            'password'=> Hash::make(""),
            'role' => "Administrator"
        ]);
    }
}
