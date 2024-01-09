<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'fname' => 'Coffee',
            'lname' => 'Digital',
            'email' => 'chandrakant@coffeedigital.in',
            'password' => Hash::make(123456789),
            'status' => 1,
            'is_deleted' => 0,
        ]);
    }


}
