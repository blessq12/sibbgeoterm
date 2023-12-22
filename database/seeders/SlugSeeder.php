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

            ['priority' => 1,'name' => 'Алмазное бурение/Штробление/Демонтаж', 'desc' => 'Вам нужно просверлить отверстие в стене или полу? Проштробить стены под проводку? Снести стену или перегородку? Звоните нам или оставляйте заявку.', 'uri' => 'almaznaya-rezka', ],
            ['priority' => 2,'name' => 'Малярные работы, безвоздушная покраска', 'desc' =>'', 'uri' => 'malyarnie-raboty', ],
            ['priority' => 3,'name' => 'Пескоструйная обработка металла, дерева, бетона и камня', 'desc' =>'', 'uri' => 'peskostyinaya-obrabotka', ],
            ['priority' => 4,'name' => 'Фасадные работы', 'desc' =>'', 'uri' => 'fasadnie-raboty', ],
            ['priority' => 5,'name' => 'Монтаж сендвич панелей', 'desc' =>'', 'uri' => 'montazh-sendwich', ],
            ['priority' => 6,'name' => 'Изготовление фасадных элементов', 'desc' =>'', 'uri' => 'gibka-metala', ],
            ['priority' => 7,'name' => 'Монтаж электроосвещения', 'desc' =>'', 'uri' => 'electro-montazh', ],
            ['priority' => 8,'name' => 'Водоснабжение и водоотведение', 'desc' =>'', 'uri' => 'vodosnabzhenie', ],
            ['priority' => 9,'name' => 'Отделка помещений для вашего бизнеса', 'desc' =>'', 'uri' => 'otdelka-pomesheniy', ],
            
        ]);
    }
}
