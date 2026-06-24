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
            flex-wrap: wrap;
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
        }
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s;
        }
        .gallery-item:hover img { transform: scale(1.05); }
        
        .empty-state { text-align: center; padding: 50px; color: #7f8c8d; font-size: 1.2em; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>Выполненные объекты</h1>

        <div class="project-card">
            <div class="project-header">
                <h2>Кровельные работы в Североморске</h2>
                <div class="project-meta">
                    <span>📍 г. Североморск, ул. Саши Ковалева, 4</span>
                    <span>📅 2024 г.</span>
                    <span>🏷️ Кровельные работы</span>
                </div>
            </div>

            @if(count($beforePhotos) > 0 || count($duringPhotos) > 0 || count($afterPhotos) > 0)
                <div class="stage-tabs">
                    @if(count($beforePhotos) > 0)
                        <button class="stage-tab active" onclick="showStage('before', this)">
                            📋 ДО начала работ <span class="count">{{ count($beforePhotos) }}</span>
                        </button>
                    @endif
                    @if(count($duringPhotos) > 0)
                        <button class="stage-tab" onclick="showStage('during', this)">
                            🔨 В процессе <span class="count">{{ count($duringPhotos) }}</span>
                        </button>
                    @endif
                    @if(count($afterPhotos) > 0)
                        <button class="stage-tab" onclick="showStage('after', this)">
                            ✅ После работ <span class="count">{{ count($afterPhotos) }}</span>
                        </button>
                    @endif
                </div>

                @if(count($beforePhotos) > 0)
                    <div id="before" class="gallery active">
                        @foreach($beforePhotos as $photo)
                            <div class="gallery-item">
                                <img src="{{ $photo }}" alt="Фото ДО">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(count($duringPhotos) > 0)
                    <div id="during" class="gallery">
                        @foreach($duringPhotos as $photo)
                            <div class="gallery-item">
                                <img src="{{ $photo }}" alt="Фото в процессе">
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(count($afterPhotos) > 0)
                    <div id="after" class="gallery">
                        @foreach($afterPhotos as $photo)
                            <div class="gallery-item">
                                <img src="{{ $photo }}" alt="Фото после">
                            </div>
                        @endforeach
                    </div>
                @endif
            @else
                <div class="empty-state">
                    <p>🚧 Фотографии объекта скоро появятся!</p>
                </div>
            @endif
        </div>
    </div>

    <script>
        function showStage(stageId, clickedTab) {
            const card = document.querySelector('.project-card');
            card.querySelectorAll('.gallery').forEach(gallery => gallery.classList.remove('active'));
            card.querySelectorAll('.stage-tab').forEach(tab => tab.classList.remove('active'));
            
            document.getElementById(stageId).classList.add('active');
            clickedTab.classList.add('active');
        }
    </script>

    @include('partials.footer')

</body>
</html>