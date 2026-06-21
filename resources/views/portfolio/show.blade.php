<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }

        .back-link { display: inline-flex; align-items: center; gap: 5px; margin-bottom: 20px; color: #3498db; text-decoration: none; font-weight: bold; transition: color 0.3s; }
        .back-link:hover { color: #2980b9; }

        .project-header { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-bottom: 30px; }
        .project-category { color: #3498db; font-weight: bold; text-transform: uppercase; font-size: 0.9em; letter-spacing: 1px; }
        .project-header h1 { margin: 10px 0; color: #2c3e50; font-size: 2em; }
        .project-meta { display: flex; gap: 20px; color: #7f8c8d; margin-bottom: 15px; font-size: 1.05em; }
        .project-description { color: #555; line-height: 1.7; font-size: 1.1em; border-top: 1px solid #ecf0f1; padding-top: 15px; }

        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }

        .photo-card {
            background: white; border-radius: 8px; overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition: transform 0.2s;
        }
        .photo-card:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(0,0,0,0.1); }

        /* Заглушка для фото. Когда будут реальные фото, заменишь div на <img> */
        .photo-placeholder {
            height: 220px; background: linear-gradient(135deg, #ecf0f1, #bdc3c7);
            display: flex; align-items: center; justify-content: center;
            color: #7f8c8d; font-size: 3em;
        }

        .photo-caption { padding: 15px; color: #2c3e50; font-weight: 600; text-align: center; border-top: 1px solid #f0f0f0; }

        .order-btn-container { text-align: center; margin-top: 40px; margin-bottom: 40px; }
        .btn-large {
            display: inline-block; padding: 15px 40px; background-color: #2ecc71; color: white;
            text-decoration: none; border-radius: 8px; font-weight: bold; font-size: 1.2em;
            transition: background 0.3s; box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);
        }
        .btn-large:hover { background-color: #27ae60; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <a href="{{ route('portfolio.index') }}" class="back-link">← Назад ко всем объектам</a>

        <div class="project-header">
            <div class="project-category">{{ $project->category }}</div>
            <h1>{{ $project->title }}</h1>
            <div class="project-meta">
                <span>📍 {{ $project->address }}</span>
                <span>📅 {{ $project->year_completed }} г.</span>
            </div>
            <div class="project-description">
                {{ $project->description }}
            </div>
        </div>

        <h2 style="color: #2c3e50; margin-bottom: 20px;">Фотографии объекта</h2>

        <div class="gallery-grid">
            @forelse($project->photos as $photo)
                <div class="photo-card">
                    <!-- Когда будут реальные фото, замени этот div на:
                         <img src="{{ asset('storage/' . $photo->image_path) }}" style="width:100%; height:220px; object-fit:cover;">
                    -->
                    <div class="photo-placeholder">📷</div>
                    @if($photo->caption)
                        <div class="photo-caption">{{ $photo->caption }}</div>
                    @endif
                </div>
            @empty
                <p style="color: #7f8c8d; grid-column: 1 / -1; text-align: center; padding: 40px; background: white; border-radius: 8px;">
                    Фотографии этого объекта пока не добавлены.
                </p>
            @endforelse
        </div>

        <div class="order-btn-container">
            <a href="{{ route('leads.create', ['service' => 'Объект: ' . $project->title]) }}" class="btn-large">
                Заказать похожий объект
            </a>
        </div>
    </div>
@include('partials.footer')
</body>
</html>
