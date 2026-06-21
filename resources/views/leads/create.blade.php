<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка на выезд замерщика</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f4f6f8; padding: 40px 20px; color: #333; }
        .form-container {
            background: white; padding: 30px; border-radius: 12px;
            max-width: 500px; margin: 0 auto; box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .form-container h2 { text-align: center; color: #2c3e50; margin-top: 0; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; color: #34495e; }
        input, textarea {
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px;
            box-sizing: border-box; font-size: 1em; transition: border-color 0.3s;
        }
        input:focus, textarea:focus { border-color: #3498db; outline: none; }
        input[readonly] { background-color: #f8f9fa; color: #7f8c8d; cursor: not-allowed; }
        button {
            background: #2ecc71; color: white; border: none; padding: 14px 20px;
            border-radius: 6px; cursor: pointer; width: 100%; font-size: 1.1em; font-weight: bold;
            transition: background 0.3s;
        }
        button:hover { background: #27ae60; }
        .error { color: #e74c3c; font-size: 0.9em; margin-top: 5px; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #3498db; text-decoration: none; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Заявка на бесплатный замер</h2>

        {{-- Форма отправляет данные методом POST на маршрут leads.store --}}
        <form action="{{ route('leads.store') }}" method="POST">

            {{-- Защита Laravel от подделки запросов (обязательно!) --}}
            @csrf

            <div class="form-group">
                <label for="name">Ваше имя *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="phone">Телефон *</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+7 (999) 000-00-00" required>
                @error('phone') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="address">Адрес объекта</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Город, улица, дом">
            </div>

            {{-- 💡 Pro-совет: Автоматическое заполнение --}}
            {{-- Если в контроллер пришло $serviceName, мы подставляем его сюда.
                 old('service_name') сохранит значение, если пользователь ошибся в другом поле и форма перезагрузилась. --}}
            <div class="form-group">
                <label for="service_name">Интересующая услуга</label>
                <input type="text" id="service_name" name="service_name"
                       value="{{ old('service_name', $serviceName ?? '') }}" readonly>
                <small style="color: #7f8c8d;">Это поле заполнено автоматически. Вы можете изменить комментарий ниже.</small>
            </div>

            <div class="form-group">
                <label for="message">Комментарий</label>
                <textarea id="message" name="message" rows="4" placeholder="Площадь, особенности объекта или другие пожелания...">{{ old('message', $serviceName ? 'Интересует услуга: ' . $serviceName . '. ' : '') }}</textarea>
            </div>

            <button type="submit">Отправить заявку</button>
        </form>

        <a href="{{ url()->previous() }}" class="back-link">← Вернуться назад</a>
    </div>

</body>
</html>
