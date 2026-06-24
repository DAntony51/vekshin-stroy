<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кровельные и фасадные работы в Мурманске | ВЕКШИН</title>
    <style>
        /* 🎉 Стили для поздравительного блока 🎉 */
        .birthday-banner {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #d4af37 100%);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .birthday-banner .big-number {
            font-size: 6em;
            font-weight: 900;
            line-height: 1;
            margin: 0;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            background: -webkit-linear-gradient(#ffffff, #f1c40f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .birthday-banner h2 {
            font-size: 2.2em;
            margin: 10px 0 20px 0;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .birthday-banner p {
            font-size: 1.25em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 25px auto;
            opacity: 0.95;
        }
        .birthday-banner .gift-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(5px);
        }
        .birthday-banner .deco {
            position: absolute;
            font-size: 5em;
            opacity: 0.15;
        }
        .birthday-banner .deco-1 { top: 10px; left: 5%; transform: rotate(-15deg); }
        .birthday-banner .deco-2 { bottom: 10px; right: 5%; transform: rotate(15deg); }

        /* Hero Section (Большой баннер) */
        .hero {
            position: relative;
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.85), rgba(52, 152, 219, 0.75)),
                       url('{{ asset('images/roof_photo2.jpg') }}') center/cover;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-bottom: 0;
        }

        .hero-content {
            max-width: 900px;
            padding: 0 20px;
            animation: fadeInUp 1s ease;
        }

        .hero h1 {
            font-size: 3em;
            margin: 0 0 20px 0;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.5em;
            margin-bottom: 30px;
            color: #ecf0f1;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .hero-btn {
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 1.1em;
            transition: all 0.3s;
            display: inline-block;
        }

        .hero-btn-primary {
            background: #2ecc71;
            color: white;
            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.4);
        }

        .hero-btn-primary:hover {
            background: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.5);
        }

        .hero-btn-secondary {
            background: white;
            color: #2c3e50;
        }

        .hero-btn-secondary:hover {
            background: #ecf0f1;
            transform: translateY(-3px);
        }

        /* Анимация появления */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Остальные стили */
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1100px; margin: 0 auto; padding: 20px; }
        h2 { text-align: center; color: #2c3e50; margin: 60px 0 40px 0; font-size: 2.5em; }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        @media (max-width: 900px) { .categories-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 600px) { .categories-grid { grid-template-columns: 1fr; } }
        @media (max-width: 768px) {
            .hero { height: 500px; }
            .hero h1 { font-size: 2em; }
            .hero-subtitle { font-size: 1.2em; }
            .birthday-banner .big-number { font-size: 4em; }
            .birthday-banner h2 { font-size: 1.8em; }
            .birthday-banner p { font-size: 1.05em; }
        }

        /* Карточка категории с постоянным фоновым изображением */
        .category-card {
            position: relative;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
            transition: all 0.4s ease;
            text-decoration: none;
            color: white;
            overflow: hidden;
            min-height: 320px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            border: none;
        }
        
        /* Фоновое изображение (постоянное) */
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center;
            transition: transform 0.4s ease;
            z-index: 0;
        }
        
        /* Затемнение поверх изображения (постоянное) */
        .category-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(44, 62, 80, 0.95) 0%, rgba(44, 62, 80, 0.7) 50%, rgba(44, 62, 80, 0.5) 100%);
            z-index: 1;
        }
        
        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        }
        
        .category-card:hover::before {
            transform: scale(1.1);
        }
        
        .category-card h3,
        .category-card p,
        .category-card .btn-text {
            position: relative;
            z-index: 2;
        }
        
        .category-card:hover h3 {
            color: #2ecc71;
        }
        
        /* Фоновые изображения для каждой категории */
        .category-card[data-category="1"]::before {
            background-image: url('{{ asset('images/services/roof.avif') }}');
        }
        .category-card[data-category="2"]::before {
            background-image: url('{{ asset('images/services/facade.avif') }}');
        }
        .category-card[data-category="3"]::before {
            background-image: url('{{ asset('images/services/mounting.avif') }}');
        }
     .category-card[data-category="4"]::before {
    background-image: url('{{ asset('images/services/cleaning.jpg') }}');
    background-position: right center;
}
        
        .category-card h3 {
            color: white;
            font-size: 1.4em;
            margin: 0 0 15px 0;
            text-transform: uppercase;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            transition: color 0.3s ease;
        }
        .category-card p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 0.95em;
            line-height: 1.6;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        .category-card .btn-text {
            color: #2ecc71;
            font-weight: bold;
            font-size: 1.1em;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>

    @include('partials.header')

    <!-- 🎉 ПОЗДРАВИТЕЛЬНЫЙ БЛОК (УДАЛИТЬ ПОЗЖЕ) 🎉 -->
    <div class="birthday-banner">
        <div class="deco deco-1">🎉</div>
        <div class="deco deco-2">🎂</div>
        
        <div class="big-number">60</div>
        <h2>Дорогой Папа, с Юбилеем!</h2>
        <p>
            Пусть здоровье будет крепким, как фундамент надежного дома, а дела процветают и приносят только радость!<br>
            Смотри в будущее с неизменным оптимизмом, верой в лучшие перемены и уверенностью в себе.<br>
            Ты — наша опора и наша надежда!
        </p>
        <div class="gift-badge">
            🎁 Этот сайт — мой искренний подарок тебе! Так что только вперёд! Победа за нами! 🚀
        </div>
    </div>
    <!-- 🎉 КОНЕЦ ПОЗДРАВИТЕЛЬНОГО БЛОКА 🎉 -->

    {{-- Hero Section (Большой баннер с панорамой) --}}
    <section class="hero">
        <div class="hero-content">
            <h1>Профессиональные кровельные и фасадные работы в Мурманске</h1>
            <p class="hero-subtitle">Гарантия качества. Соблюдение сроков. Честные цены.</p>
            <div class="hero-buttons">
                <a href="{{ route('leads.create') }}" class="hero-btn hero-btn-primary">Бесплатный замер</a>
                <a href="{{ route('portfolio.index') }}" class="hero-btn hero-btn-secondary">Наши работы</a>
            </div>
        </div>
    </section>

    {{-- Секция с категориями услуг --}}
    <div class="container">
        <h2>Наши услуги</h2>

        <div class="categories-grid">
            @foreach($categories as $category)
                <a href="{{ route('services.show', $category->id) }}" class="category-card" data-category="{{ $category->id }}">
                    <h3>{{ $category->name }}</h3>
                    <p>{{ $category->description }}</p>
                    <span class="btn-text">Подробнее →</span>
                </a>
            @endforeach
        </div>
    </div>

    @include('partials.footer')

</body>
</html>