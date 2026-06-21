<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;

class VacancyController extends Controller
{
    // 1. Показать список всех активных вакансий
    public function index()
    {
        $vacancies = Vacancy::where('is_active', true)
                            ->orderBy('sort_order', 'asc')
                            ->get();

        return view('vacancies.index', compact('vacancies'));
    }

    // 2. Показать подробное описание одной вакансии
    public function show($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return view('vacancies.show', compact('vacancy'));
    }
}
