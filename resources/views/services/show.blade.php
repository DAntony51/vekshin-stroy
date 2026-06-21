<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }

        .back-link { display: inline-flex; align-items: center; gap: 5px; margin-bottom: 20px; color: #3498db; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        .back-link:hover { color: #2980b9; }

        .category-header { margin-bottom: 30px; border-bottom: 3px solid #3498db; padding-bottom: 15px; }
        .category-header h1 { margin: 0; color: #2c3e50; text-transform: uppercase; font-size: 2em; }
        .category-header p { color: #7f8c8d; font-size: 1.1em; margin-top: 10px; line-height: 1.6; }

        .services-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }

        .service-card {
            background: white; border-radius: 8px; padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 5px solid #2ecc71;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .service-card:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        .service-card h3 { margin-top: 0; color: #2c3e50; font-size: 1.3em; }
        .service-card p { color: #555; font-size: 0.95em; line-height: 1.6; }
        .price { color: #27ae60; font-weight: bold; font-size: 1.2em; margin-top: 15px; }

        .btn {
            display: block; text-align: center; margin-top: 20px; padding: 12px;
            background-color: #3498db; color: white; text-decoration: none;
            border-radius: 6px; font-weight: bold; transition: background 0.3s;
        }
        .btn:hover { background-color: #2980b9; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <a href="{{ route('services.index') }}" class="back-link">← Назад ко всем услугам</a>

        <div class="category-header">
            <h1>{{ $category->name }}</h1>
            <p>{{ $category->description }}</p>
        </div>

        <div class="services-grid">
            @foreach($services as $service)
                <div class="service-card">
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                    @if($service->price_from)
                        <div class="price">от {{ number_format($service->price_from, 0, ',', ' ') }} руб.</div>
                    @endif
                    <a href="{{ route('leads.create', ['service' => $service->name]) }}" class="btn">Заказать эту услугу</a>
                </div>
            @endforeach
        </div>
    </div>
@include('partials.footer')
</body>
</html>
