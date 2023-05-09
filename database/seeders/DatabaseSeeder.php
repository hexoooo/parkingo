<?php

namespace Database\Seeders;

use App\Models\Parking;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Parking::factory()->count(8)->create();
                DB::table('users')->insert([
            'name' => fake()->name(),
            'email' =>'parkingo@gmail.com',
            'password' => Hash::make('000000'),
            'phone' =>'01234567890',
            'role_id' =>'2',
            'username' =>fake()->name(),
        ]);
    }
}
