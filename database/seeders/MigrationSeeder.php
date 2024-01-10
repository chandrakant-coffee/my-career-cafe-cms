<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class MigrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'fname' => 'Coffee',
            'lname' => 'Digital',
            'email' => 'chandrakant@coffeedigital.in',
            'password' => Hash::make(123456789),
            'status' => 1,
            'is_deleted' => 0,
        ]);
    }
}
