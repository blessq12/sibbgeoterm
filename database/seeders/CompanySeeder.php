<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => 'сибгеотерм',
            'description' => 'Строительство быстровозводимых зданий в Томске, Кемерово и Красноярске',
            'logo' => '/assets/images/logo.png',
            'tel' => '+7 (913) 820-33-05',
            'email' => 'sibgeotherm@yandex.ru',
            'address' => 'ул. Учебная, 37а, 2 подъезд, офис 13',
            'waLink' => '',
            'tgLink' => ''
        ]);
    }
}
