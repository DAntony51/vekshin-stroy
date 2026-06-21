<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $vacancy->title }} | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 900px; margin: 0 auto; padding: 20px; }

        .back-link { display: inline-flex; align-items: center; gap: 5px; margin-bottom: 20px; color: #3498db; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        .back-link:hover { color: #2980b9; }

        /* Карточка с описанием вакансии */
        .vacancy-details { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; }
        .vacancy-details h1 { margin: 0 0 15px 0; color: #2c3e50; font-size: 2em; line-height: 1.2; }
        .vacancy-meta { display: flex; gap: 15px; margin-bottom: 25px; flex-wrap: wrap; }
        .meta-tag { background: #ecf0f1; color: #2c3e50; padding: 6px 14px; border-radius: 20px; font-size: 0.95em; font-weight: 600; display: flex; align-items: center; gap: 5px; }
        .meta-tag.salary { background: #e8f8f5; color: #27ae60; }

        .section-title { color: #2c3e50; font-size: 1.2em; margin-top: 25px; margin-bottom: 10px; border-bottom: 2px solid #3498db; padding-bottom: 5px; display: inline-block; font-weight: bold; }
        .text-block { color: #555; line-height: 1.7; white-space: pre-line; /* Сохраняет переносы строк из базы */ font-size: 1.05em; }

        /* Форма отклика */
        .application-form { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 5px solid #2ecc71; }
        .application-form h2 { margin-top: 0; color: #2c3e50; text-align: center; margin-bottom: 25px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: bold; color: #34495e; }
        .form-group input, .form-group textarea {
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px;
            box-sizing: border-box; font-size: 1em; font-family: inherit; transition: border-color 0.3s;
        }
        .form-group input:focus, .form-group textarea:focus { border-color: #3498db; outline: none; }
        .form-group input[readonly] { background-color: #f8f9fa; color: #7f8c8d; cursor: not-allowed; }

        .btn-submit {
            background: #2ecc71; color: white; border: none; padding: 14px 20px;
            border-radius: 6px; cursor: pointer; width: 100%; font-size: 1.1em; font-weight: bold;
            transition: background 0.3s;
        }
        .btn-submit:hover { background: #27ae60; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <a href="{{ route('vacancies.index') }}" class="back-link">← Назад ко всем вакансиям</a>

        <div class="vacancy-details">
            <h1>{{ $vacancy->title }}</h1>
            <div class="vacancy-meta">
                <span class="meta-tag salary">💰 {{ $vacancy->salary ?: 'По договоренности' }}</span>
                <span class="meta-tag">💼 {{ $vacancy->employment_type }}</span>
            </div>

            <div class="section-title">Описание работы</div>
            <div class="text-block">{{ $vacancy->description }}</div>

            @if($vacancy->requirements)
                <div class="section-title">Требования</div>
                <div class="text-block">{{ $vacancy->requirements }}</div>
            @endif

            @if($vacancy->conditions)
                <div class="section-title">Мы предлагаем</div>
                <div class="text-block">{{ $vacancy->conditions }}</div>
            @endif
        </div>

        <div class="application-form">
            <h2>Откликнуться на вакансию</h2>
            <form action="{{ route('leads.store') }}" method="POST">
                @csrf

                {{-- Скрытое поле, чтобы контроллер знал, на какую вакансию отклик --}}
                <input type="hidden" name="vacancy_title" value="{{ $vacancy->title }}">

                <div class="form-group">
                    <label for="name">Ваше имя *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Иван Иванов" required>
                </div>

                <div class="form-group">
                    <label for="phone">Телефон *</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+7 (999) 000-00-00" required>
                </div>

                <div class="form-group">
                    <label for="message">Ваш опыт работы или сопроводительное письмо</label>
                    <textarea id="message" name="message" rows="4" placeholder="Расскажите кратко о вашем опыте, где работали, какие навыки имеете...">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn-submit">Отправить отклик</button>
            </form>
        </div>
    </div>
@include('partials.footer')
</body>
</html>
