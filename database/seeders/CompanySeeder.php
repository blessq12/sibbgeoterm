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
            'navigator' => 'https://yandex.ru/maps/67/tomsk/?ll=84.960890%2C56.458590&mode=routes&rtext=~56.458641%2C84.960378&rtt=auto&ruri=~ymapsbm1%3A%2F%2Forg%3Foid%3D65006678309&z=18.59',
            'waLink' => '',
            'tgLink' => ''
        ]);
    }
}
