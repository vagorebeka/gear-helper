<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory(5)->create();
    }
    // {
    //     DB::table('users')->insert([
    //         'username' => Str::random(10),
    //         'email' => Str::random(10).'@gmail.com',
    //         'password' => Hash::make('password'),
    //     ]);
    // }
}
