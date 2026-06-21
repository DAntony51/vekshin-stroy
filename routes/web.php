<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
 use App\Http\Controllers\LeadController;
 use App\Http\Controllers\ProjectController;
 use App\Http\Controllers\VacancyController;

Route::get('/', function () {
    return redirect()->route('services.index');
});

// Главная страница услуг (4 категории)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// НОВЫЙ МАРШРУТ: Страница конкретной категории (например, /services/1)
Route::get('/services/{category}', [ServiceController::class, 'show'])->name('services.show');

// Страница "Наши работы" (список объектов)
Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio.index');

// Страница конкретного объекта (с фото)
Route::get('/portfolio/{project}', [ProjectController::class, 'show'])->name('portfolio.show');

Route::get('/request-visit', [LeadController::class, 'create'])->name('leads.create');
Route::post('/request-visit', [LeadController::class, 'store'])->name('leads.store');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Страница со списком вакансий
Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');

// Страница конкретной вакансии
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show'])->name('vacancies.show');
