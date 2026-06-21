<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    // 1. Список всех выполненных работ (объектов)
    public function index()
    {
        // Берем только активные проекты, сортируем по году (сначала новые)
        $projects = Project::where('is_active', true)
                           ->orderBy('year_completed', 'desc')
                           ->get();

        return view('portfolio.index', compact('projects'));
    }

    // 2. Страница конкретного объекта с фотографиями
    public function show($id)
    {
        // Ищем проект по ID и сразу подгружаем его фотографии (ж жадная загрузка)
        $project = Project::with('photos')->findOrFail($id);

        return view('portfolio.show', compact('project'));
    }
}
