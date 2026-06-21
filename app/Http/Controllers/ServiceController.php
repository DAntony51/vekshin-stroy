<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ServiceController extends Controller
{
    // 1. Главная страница: показывает 4 категории
    public function index()
    {
        $categories = Category::orderBy('sort_order', 'asc')->get();
        return view('services.index', compact('categories'));
    }

    // 2. Страница категории: показывает услуги внутри неё
    public function show($id)
    {
        // Находим категорию по ID (или выдаем 404, если не найдена)
        $category = Category::findOrFail($id);

        // Берем только активные услуги этой категории
        $services = $category->services()
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('services.show', compact('category', 'services'));
    }
}
