<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            // КРОВЕЛЬНЫЕ РАБОТЫ (category_id = 1)
            ['category_id' => 1, 'name' => 'Монтаж металлочерепицы', 'description' => 'Профессиональный монтаж с соблюдением всех технологий.'],
            ['category_id' => 1, 'name' => 'Монтаж мягкой кровли', 'description' => 'Укладка рулонной и наплавляемой кровли, гидроизоляция.'],
            ['category_id' => 1, 'name' => 'Ремонт кровли', 'description' => 'Устранение протечек и полная реконструкция кровли.'],

            // ФАСАДНЫЕ РАБОТЫ (category_id = 2)
            ['category_id' => 2, 'name' => 'Вентилируемые фасады', 'description' => 'Монтаж навесных фасадных систем.'],
            ['category_id' => 2, 'name' => 'Утепление фасадов', 'description' => 'Монтаж систем СФТК (мокрый фасад).'],
            ['category_id' => 2, 'name' => 'Герметизация швов', 'description' => 'Заделка межпанельных швов на высоте.'],

            // МОНТАЖНЫЕ РАБОТЫ (category_id = 3)
            ['category_id' => 3, 'name' => 'Монтаж водосточных систем', 'description' => 'Установка водостоков из металла и ПВХ.'],
            ['category_id' => 3, 'name' => 'Монтаж снегозадержателей', 'description' => 'Установка систем безопасности кровли.'],

            // ВЫСОТНЫЙ КЛИНИНГ (category_id = 4)
            ['category_id' => 4, 'name' => 'Очистка крыш от снега', 'description' => 'Своевременная уборка снега и наледи с кровли.'],
            ['category_id' => 4, 'name' => 'Мойка окон на высоте', 'description' => 'Профессиональная мойка витрин и окон альпинистами.'],
        ]);
    }
}