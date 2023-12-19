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
            ['name' => 'Алмазное бурение/Штробление/Демонтаж', 'desc' => 'Вам нужно просверлить отверстие в стене или полу? Проштробить стены под проводку? Снести стену или перегородку? Звоните нам или оставляйте заявку.', 'uri' => 'almaznaya-rezka', 'view' => ''],
            ['name' => 'Отделка помещений для вашего бизнеса', 'desc' =>'', 'uri' => 'otdelka-pomesheniy', 'view' => ''],
            ['name' => 'Монтаж сендвич панелей', 'desc' =>'', 'uri' => 'montazh-sendwich', 'view' => ''],
            ['name' => 'Монтаж электро освещения', 'desc' =>'', 'uri' => 'electro-montazh', 'view' => ''],
            ['name' => 'Водоснабжение и водоотведение', 'desc' =>'', 'uri' => 'vodosnabzhenie', 'view' => ''],
            ['name' => 'Фасадные работы', 'desc' =>'', 'uri' => 'fasadnie-raboty', 'view' => ''],
            ['name' => 'Пескоструйная обработка металла, дерева, бетона и камня', 'desc' =>'', 'uri' => 'peskostyinaya-obrabotka', 'view' => ''],
            ['name' => 'Малярные работы, безвоздушная покраска', 'desc' =>'', 'uri' => 'malyarnie-raboty', 'view' => ''],
            ['name' => 'Гибка листового метала', 'desc' =>'', 'uri' => 'gibka-metala', 'view' => ''],
        ]);
    }
}
