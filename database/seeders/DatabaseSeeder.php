<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. КРОВЕЛЬНЫЕ РАБОТЫ
        $roofing = Category::create([
            'name' => 'КРОВЕЛЬНЫЕ РАБОТЫ',
            'description' => 'Полный спектр работ по ремонту, монтажу и обслуживанию всех типов кровель с гарантией качества.',
            'sort_order' => 1
        ]);
        $this->createServices($roofing->id, [
            'Ремонт кровли', 'Герметизация кровли', 'Утепление кровли',
            'Ремонт мягкой кровли', 'Гидроизоляция кровли', 'Ремонт козырьков и навесов'
        ]);

        // 2. ФАСАДНЫЕ РАБОТЫ
        $facade = Category::create([
            'name' => 'ФАСАДНЫЕ РАБОТЫ',
            'description' => 'Профессиональная отделка, ремонт и утепление фасадов зданий любой сложности.',
            'sort_order' => 2
        ]);
        $this->createServices($facade->id, [
            'Ремонт фасада', 'Монтаж вентилируемых фасадов', 'Заделка трещин фасада',
            'Ремонт балконов', 'Утепление стен'
        ]);

        // 3. МОНТАЖНЫЕ РАБОТЫ
        $mounting = Category::create([
            'name' => 'МОНТАЖНЫЕ РАБОТЫ',
            'description' => 'Качественный монтаж инженерных систем, коммуникаций и внешних конструкций.',
            'sort_order' => 3
        ]);
        $this->createServices($mounting->id, [
            'Монтаж вентиляции', 'Монтаж водосточной системы', 'Монтаж систем видеонаблюдения',
            'Монтаж баннеров и рекламных вывесок', 'Монтаж кондиционеров',
            'Монтаж систем освещения', 'Монтаж карнизных свесов'
        ]);

        // 4. ВЫСОТНЫЙ КЛИНИНГ
        $cleaning = Category::create([
            'name' => 'ВЫСОТНЫЙ КЛИНИНГ',
            'description' => 'Безопасная очистка и мойка фасадов, крыш и окон на любой высоте промышленными альпинистами.',
            'sort_order' => 4
        ]);
        $this->createServices($cleaning->id, [
            'Уборка снега с крыш', 'Мойка и очистка крыш', 'Мойка фасадов',
            'Мойка окон', 'Очистка фасадов от снега и наледи'
        ]);
         $this->createProjects();
    }

    // Вспомогательный метод для создания услуг внутри категории
    private function createServices($categoryId, $serviceNames)
    {
        foreach ($serviceNames as $index => $name) {
            Service::create([
                'category_id' => $categoryId,
                'name' => $name,
                'description' => 'Профессиональное выполнение работ по направлению: ' . strtolower($name) . '. Используем качественные материалы.',
                'price_from' => rand(500, 2500) * 10, // Случайная цена от 5000 до 25000 для примера
                'sort_order' => $index + 1,
                'is_active' => true
            ]);
        }
    }
        // Вспомогательный метод для создания проектов с фото
    private function createProjects()
    {
        // Проект 1: Кровля
        $project1 = \App\Models\Project::create([
            'title' => 'Ремонт кровли жилого дома',
            'address' => 'г. Мурманск, ул. Домостроительная',
            'description' => 'Полная замена кровельного покрытия, монтаж водосточной системы',
            'category' => 'КРОВЕЛЬНЫЕ РАБОТЫ',
            'year_completed' => 2025,
            'is_active' => true
        ]);

        // Проект 2: Фасад
        $project2 = \App\Models\Project::create([
            'title' => 'Монтаж вентилируемого фасада',
            'address' => 'г. Мурманск, пр. Ленина',
            'description' => 'Утепление и отделка фасада композитными панелями',
            'category' => 'ФАСАДНЫЕ РАБОТЫ',
            'year_completed' => 2025,
            'is_active' => true
        ]);

        // Проект 3: Высотный клининг
        $project3 = \App\Models\Project::create([
            'title' => 'Очистка крыши от снега и наледи',
            'address' => 'г. Мурманск, ул. Карла Либкнехта',
            'description' => 'Сезонная уборка снега, очистка водостоков',
            'category' => 'ВЫСОТНЫЙ КЛИНИНГ',
            'year_completed' => 2026,
            'is_active' => true
        ]);

        // Добавляем тестовые фото (заглушки)
        // В будущем здесь будут реальные пути к загруженным фото
        \App\Models\Photo::create([
            'project_id' => $project1->id,
            'image_path' => 'placeholder_roof_1.jpg',
            'caption' => 'До начала работ',
            'sort_order' => 1
        ]);
        \App\Models\Photo::create([
            'project_id' => $project1->id,
            'image_path' => 'placeholder_roof_2.jpg',
            'caption' => 'Процесс монтажа',
            'sort_order' => 2
        ]);
        \App\Models\Photo::create([
            'project_id' => $project1->id,
            'image_path' => 'placeholder_roof_3.jpg',
            'caption' => 'Готовый результат',
            'sort_order' => 3
        ]);

        \App\Models\Photo::create([
            'project_id' => $project2->id,
            'image_path' => 'placeholder_facade_1.jpg',
            'caption' => 'Фасад после отделки',
            'sort_order' => 1
        ]);
        \App\Models\Photo::create([
            'project_id' => $project2->id,
            'image_path' => 'placeholder_facade_2.jpg',
            'caption' => 'Фрагмент монтажа',
            'sort_order' => 2
        ]);

        \App\Models\Photo::create([
            'project_id' => $project3->id,
            'image_path' => 'placeholder_cleaning_1.jpg',
            'caption' => 'Очистка кровли',
            'sort_order' => 1
        ]);
    }
}
