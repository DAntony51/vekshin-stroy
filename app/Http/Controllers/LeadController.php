<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    // 1. Показать форму заявки
    public function create(Request $request)
    {
        // Берем название услуги из адресной строки (например, ?service=Ремонт+кровли)
        $serviceName = $request->query('service');

        // Передаем это название в шаблон формы, чтобы подставить его автоматически
        return view('leads.create', compact('serviceName'));
    }

    // 2. Обработка отправки формы (пока заглушка, чтобы проверить работу)
    public function store(Request $request)
    {
        // Здесь позже мы напишем сохранение заявки в базу данных
        return 'Заявка успешно отправлена! (Это тестовое сообщение)';
    }
}
