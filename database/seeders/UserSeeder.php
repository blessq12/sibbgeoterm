<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Root User',
            'email' => 'root@sibgeo',
            'tel' => '+7 (999) 999-99-99',
            'password' => Hash::make('password'),
            'active' => true
        ]);
    }
}
