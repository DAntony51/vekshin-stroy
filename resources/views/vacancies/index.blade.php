<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вакансии | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 40px; font-size: 2.5em; margin-top: 20px; }

        .vacancies-list { display: flex; flex-direction: column; gap: 20px; }

        .vacancy-card {
            background: white; border-radius: 12px; padding: 25px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05); border-left: 5px solid #3498db;
            transition: transform 0.2s, box-shadow 0.2s; text-decoration: none; color: inherit;
        }
        .vacancy-card:hover { transform: translateX(5px); box-shadow: 0 8px 20px rgba(0,0,0,0.1); border-left-color: #2ecc71; }

        .vacancy-header { display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 10px; margin-bottom: 10px; }
        .vacancy-title { margin: 0; color: #2c3e50; font-size: 1.4em; }
        .vacancy-salary { background: #e8f8f5; color: #27ae60; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 1.1em; white-space: nowrap; }

        .vacancy-type { color: #7f8c8d; font-size: 0.95em; margin-bottom: 15px; display: flex; align-items: center; gap: 5px; }
        .vacancy-desc { color: #555; line-height: 1.6; margin-bottom: 15px; }
        .vacancy-link { color: #3498db; font-weight: bold; display: inline-flex; align-items: center; gap: 5px; }
        .vacancy-card:hover .vacancy-link { color: #2ecc71; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>Работа в ВЕКШИН</h1>

        <div class="vacancies-list">
            @forelse($vacancies as $vacancy)
                <a href="{{ route('vacancies.show', $vacancy->id) }}" class="vacancy-card">
                    <div class="vacancy-header">
                        <h3 class="vacancy-title">{{ $vacancy->title }}</h3>
                        @if($vacancy->salary)
                            <span class="vacancy-salary">{{ $vacancy->salary }}</span>
                        @endif
                    </div>
                    <div class="vacancy-type">💼 {{ $vacancy->employment_type }}</div>
                    <p class="vacancy-desc">{{ Str::limit($vacancy->description, 150) }}</p>
                    <span class="vacancy-link">Подробнее об условиях →</span>
                </a>
            @empty
                <p style="text-align: center; color: #7f8c8d; font-size: 1.2em; padding: 40px; background: white; border-radius: 8px;">
                    В данный момент открытых вакансий нет. Загляните позже!
                </p>
            @endforelse
        </div>
    </div>
@include('partials.footer')
</body>
</html>
