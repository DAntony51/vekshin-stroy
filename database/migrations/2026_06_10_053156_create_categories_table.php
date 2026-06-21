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
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Например: "КРОВЕЛЬНЫЕ РАБОТЫ"
        $table->text('description')->nullable(); // Краткое описание секции
        $table->integer('sort_order')->default(0); // Порядок вывода (1, 2, 3, 4)
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
