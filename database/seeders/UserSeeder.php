<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'username' => 'arief123',
            'password' => bcrypt('test'),
            'address' => 'bumi yang mantap ini',
            'phone_number' => '08912345676'
        ]);

        User::create([
            'username' => 'test',
            'password' => bcrypt('test'),
            'address' => 'pengen nemu duit 1m',
            'phone_number' => '081273567'
        ]);
    }
}
