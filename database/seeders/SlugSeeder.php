<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('slugs')->insert([
            ['name' => 'Алмазное бурение/Штробление/Демонтаж', 'uri' => 'almaznaya-rezka', 'view' => ''],
            ['name' => 'Отделка помещений для вашего бизнеса', 'uri' => 'otdelka-pomesheniy', 'view' => ''],
            ['name' => 'Монтаж электро освещения', 'uri' => 'electro-montazh', 'view' => ''],
            ['name' => 'Водоснабжение и водоотведение', 'uri' => 'vodosnabzhenie', 'view' => ''],
            ['name' => 'Фасадные работы', 'uri' => 'fasadnie-raboty', 'view' => ''],
            ['name' => 'Пескоструйная обработка металла, дерева, бетона и камня', 'uri' => 'peskostyinaya-obrabotka', 'view' => ''],
            ['name' => 'Малярные работы, безвоздушная покраска', 'uri' => 'malyarnie-raboty', 'view' => ''],
            ['name' => 'Гибка листового метала', 'uri' => 'gibka-metala', 'view' => ''],
        ]);
    }
}
