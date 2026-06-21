<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Название вакансии (например, "Кровельщик-альпинист")
            $table->text('description'); // Подробное описание вакансии
            $table->text('requirements')->nullable(); // Требования к кандидату
            $table->text('conditions')->nullable(); // Условия работы
            $table->string('salary')->nullable(); // Зарплата (текстом, например "от 80 000 руб.")
            $table->string('employment_type')->nullable(); // Тип занятости (Полная, Частичная)
            $table->boolean('is_active')->default(true); // Активна ли вакансия
            $table->integer('sort_order')->default(0); // Порядок сортировки
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
