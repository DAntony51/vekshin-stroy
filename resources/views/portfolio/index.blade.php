<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши работы | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1100px; margin: 0 auto; padding: 20px; }
        h1 { text-align: center; color: #2c3e50; margin: 40px 0 20px 0; font-size: 2.5em; }
        
        .project-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        .project-header {
            border-bottom: 2px solid #3498db;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .project-header h2 { margin: 0 0 10px 0; color: #2c3e50; }
        .project-meta { color: #7f8c8d; font-size: 0.95em; display: flex; gap: 20px; flex-wrap: wrap; }
        
        /* Табы для этапов */
        .stage-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            border-bottom: 2px solid #ecf0f1;
        }
        .stage-tab {
            padding: 12px 24px;
            background: #ecf0f1;
            border: none;
            border-radius: 8px 8px 0 0;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            color: #7f8c8d;
            transition: all 0.3s;
            position: relative;
            bottom: -2px;
        }
        .stage-tab:hover { background: #d5dbdb; }
        .stage-tab.active {
            background: #3498db;
            color: white;
        }
        .stage-tab .count {
            background: rgba(0,0,0,0.2);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.85em;
            margin-left: 8px;
        }
        
        /* Галерея */
        .gallery {
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            animation: fadeIn 0.3s;
        }
        .gallery.active { display: grid; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s;
        }
        .gallery-item:hover img { transform: scale(1.05); }
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 8px;
            font-size: 0.9em;
            text-align: center;
        }
        
        .empty-state { text-align: center; padding: 50px; color: #7f8c8d; font-size: 1.2em; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>Выполненные объекты</h1>

        @if(isset($projects) && $projects->count() > 0)
            @foreach($projects as $project)
                <div class="project-card">
                    <div class="project-header">
                        <h2>{{ $project->title }}</h2>
                        <div class="project-meta">
                            <span>📍 {{ $project->address }}</span>
                            <span>📅 {{ $project->year_completed }} г.</span>
                            <span>🏷️ {{ $project->category }}</span>
                        </div>
                    </div>
                    <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">{{ $project->description }}</p>

                    @php
                        $beforePhotos = $project->photos->where('stage', 'before')->sortBy('sort_order');
                        $duringPhotos = $project->photos->where('stage', 'during')->sortBy('sort_order');
                        $afterPhotos = $project->photos->where('stage', 'after')->sortBy('sort_order');
                    @endphp

                    @if($beforePhotos->count() > 0 || $duringPhotos->count() > 0 || $afterPhotos->count() > 0)
                        <div class="stage-tabs">
                            @if($beforePhotos->count() > 0)
                                <button class="stage-tab active" onclick="showStage('before-{{ $project->id }}')">
                                    📋 ДО начала работ <span class="count">{{ $beforePhotos->count() }}</span>
                                </button>
                            @endif
                            @if($duringPhotos->count() > 0)
                                <button class="stage-tab" onclick="showStage('during-{{ $project->id }}')">
                                    🔨 В процессе <span class="count">{{ $duringPhotos->count() }}</span>
                                </button>
                            @endif
                            @if($afterPhotos->count() > 0)
                                <button class="stage-tab" onclick="showStage('after-{{ $project->id }}')">
                                    ✅ После работ <span class="count">{{ $afterPhotos->count() }}</span>
                                </button>
                            @endif
                        </div>

                        @if($beforePhotos->count() > 0)
                            <div id="before-{{ $project->id }}" class="gallery active">
                                @foreach($beforePhotos as $photo)
                                    <div class="gallery-item">
                                        <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->caption }}">
                                        
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if($duringPhotos->count() > 0)
                            <div id="during-{{ $project->id }}" class="gallery">
                                @foreach($duringPhotos as $photo)
                                    <div class="gallery-item">
                                        <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->caption }}">
                                
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if($afterPhotos->count() > 0)
                            <div id="after-{{ $project->id }}" class="gallery">
                                @foreach($afterPhotos as $photo)
                                    <div class="gallery-item">
                                        <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->caption }}">
                                       
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @else
                        <p style="color: #95a5a6; font-style: italic;">Фотографии объекта пока не добавлены.</p>
                    @endif
                </div>
            @endforeach
        @else
            <div class="empty-state">
                <p>🚧 Раздел находится в наполнении. Скоро здесь появятся фото наших лучших объектов!</p>
            </div>
        @endif
    </div>

    <script>
        function showStage(stageId) {
            // Скрываем все галереи в этом проекте
            const card = document.getElementById(stageId).closest('.project-card');
            card.querySelectorAll('.gallery').forEach(gallery => gallery.classList.remove('active'));
            card.querySelectorAll('.stage-tab').forEach(tab => tab.classList.remove('active'));
            
            // Показываем нужную галерею
            document.getElementById(stageId).classList.add('active');
            event.target.classList.add('active');
        }
    </script>

    @include('partials.footer')

</body>
</html>