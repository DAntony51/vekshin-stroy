<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'КРОВЕЛЬНЫЕ РАБОТЫ', 'description' => 'Монтаж и ремонт всех видов кровель: металлочерепица, мягкая кровля, фальц.'],
            ['name' => 'ФАСАДНЫЕ РАБОТЫ', 'description' => 'Утепление, отделка и ремонт фасадов. Вентилируемые системы, штукатурка.'],
            ['name' => 'МОНТАЖНЫЕ РАБОТЫ', 'description' => 'Установка водосточных систем, снегозадержателей и элементов безопасности.'],
            ['name' => 'ВЫСОТНЫЙ КЛИНИНГ', 'description' => 'Очистка крыш от снега и наледи. Мойка окон и фасадов на высоте.'],
        ]);
    }
}