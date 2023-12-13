<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyLegalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_legals')->insert([
            'company_id' => 1,
            'inn' => '7017304867',
            'kpp' => '701701001',
            'ogrn' => '1127017012760',
            'okpo' => '30418607',
            'okved' => '45.25.2',
            'okfs' => '65',
            'okopf' => '16',
            'addressLegal' => '634034, Томская обл, Томск г, Нахимова ул., дом № 8, стр.11',
            'addressFact' => '634034, Томская обл, Томск г, Нахимова ул., дом № 8, стр.11',
            'companyName' => 'ООО «Сибгеотерм»',
            'owner' => 'Австриевских  Артур Александрович ',
            'tel' => '+7 (3822) 55-60-92',
            'fax' => '+7 (3822) 55-60-77',
            'bankDetails' => 'Филиал «НОВОСИБИРСКИЙ» АО «Альфа Банк»; БИК 045004774; К/С 30101810600000000774; Р/С 40702810723010002773',
        ]);
    }
}
