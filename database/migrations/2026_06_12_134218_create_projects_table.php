<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // Название, например "Ремонт кровли ул. Ленина"
        $table->string('address'); // Адрес объекта
        $table->text('description')->nullable(); // Описание работ
        $table->string('category'); // Тип работ (Кровля, Фасад и т.д.)
        $table->year('year_completed')->nullable(); // Год выполнения
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
