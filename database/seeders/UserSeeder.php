<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         'name'=> 'fateme mozafari',
         'email'=> 'fateme@gmail.com',
         'password'=> '123456',
         'phone_number'=> '09181114052',
         'date_of_birth'=> '1990-3-31',
     ]);
    }
}
