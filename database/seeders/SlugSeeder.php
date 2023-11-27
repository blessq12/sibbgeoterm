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
            ['uri' => 'slug_1'],
            ['uri' => 'slug_2'],
            ['uri' => 'slug_3'],
            ['uri' => 'slug_4'],
        ]);
    }
}
