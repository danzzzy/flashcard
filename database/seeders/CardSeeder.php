<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++){
          DB::table('card')->insert([
            'term_en' => 'english:'.$i,
            'term_jp' => '日本語:'.$i
        ]);
        }
    }
}
