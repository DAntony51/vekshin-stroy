<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return redirect()->route('services.index');
});

// Главная страница услуг (4 категории)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Страница конкретной категории (например, /services/1)
Route::get('/services/{category}', [ServiceController::class, 'show'])->name('services.show');

// Страница "Наши работы" — НОВЫЙ контроллер с автозагрузкой фото
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Форма заявки
Route::get('/request-visit', [LeadController::class, 'create'])->name('leads.create');
Route::post('/request-visit', [LeadController::class, 'store'])->name('leads.store');

// Страница "О компании"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты"
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Страница со списком вакансий
Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.index');

// Страница конкретной вакансии
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show'])->name('vacancies.show');