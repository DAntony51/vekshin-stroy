<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        
        /* Hero-блок */
        .hero {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5em;
            margin: 0 0 15px 0;
            font-weight: 800;
        }
        .hero p {
            font-size: 1.3em;
            opacity: 0.95;
            margin: 0;
        }
        .hero .subtitle {
            margin-top: 10px;
            font-size: 1.1em;
            opacity: 0.85;
        }
        
        /* Основной контент */
        .container { max-width: 900px; margin: 0 auto; padding: 50px 20px; }
        
        .content-block {
            background: white;
            border-radius: 12px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
        
        .content-block h2 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 1.6em;
            padding-bottom: 12px;
            border-bottom: 2px solid #ecf0f1;
        }
        
        .content-block p {
            font-size: 1.08em;
            line-height: 1.75;
            color: #555;
            margin: 0 0 15px 0;
        }
        .content-block p:last-child { margin-bottom: 0; }
        
        .content-block strong { color: #2c3e50; }
        
        .content-block ul {
            font-size: 1.08em;
            line-height: 1.8;
            color: #555;
            margin: 15px 0;
            padding-left: 25px;
        }
        .content-block ul li { margin-bottom: 8px; }
        
        /* Блок руководителя */
        .director {
            background: #f8f9fa;
            padding: 25px 30px;
            border-radius: 8px;
            border-left: 4px solid #3498db;
            margin: 20px 0;
        }
        .director h3 {
            color: #2c3e50;
            margin: 0 0 10px 0;
            font-size: 1.3em;
        }
        .director p { margin: 0; }
        
        /* Сетка преимуществ */
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .advantage-item {
            padding: 18px 20px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 3px solid #27ae60;
        }
        .advantage-item h4 {
            color: #2c3e50;
            margin: 0 0 5px 0;
            font-size: 1.05em;
        }
        .advantage-item p {
            color: #7f8c8d;
            margin: 0;
            font-size: 0.95em;
            line-height: 1.4;
        }
        
        /* Принципы */
        .principles-list {
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
        }
        .principles-list li {
            padding: 12px 18px;
            margin-bottom: 8px;
            background: #f8f9fa;
            border-radius: 6px;
            font-size: 1.05em;
            line-height: 1.5;
        }
        .principles-list li:last-child { margin-bottom: 0; }
        
        /* Акцентный блок "25 лет" */
        .highlight-box {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 25px 30px;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2em;
            font-weight: 600;
            margin: 20px 0;
        }
        
        @media (max-width: 768px) {
            .hero h1 { font-size: 1.8em; }
            .hero p { font-size: 1.1em; }
            .content-block { padding: 25px; }
            .advantages-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    @include('partials.header')

    <!-- Hero-блок -->
    <section class="hero">
        <h1>О компании ВЕКШИН</h1>
        <p>Профессиональные кровельные и фасадные работы в Мурманске</p>
        <p class="subtitle">Более 25 лет опыта · Надежная команда · Современные технологии</p>
    </section>

    <div class="container">

        <!-- О компании + Руководитель -->
        <div class="content-block">
            <h2>🏢 О компании</h2>
            <p>Компания "ВЕКШИН" работает на строительном рынке Мурманска с <strong>1999 года</strong>. За четверть века мы накопили уникальный опыт работы в сложных климатических условиях Крайнего Севера, знаем все особенности северных кровель и фасадов, научились решать самые нестандартные задачи.</p>
            
            <div class="director">
                <h3>Руководитель — Антоняк Сергей Иванович</h3>
                <p>Опытный руководитель с 19-летним стажем управления строительной организацией. Лично контролирует каждый объект, что гарантирует высочайшее качество работ и соблюдение сроков.</p>
            </div>
        </div>

        <!-- Команда + Качество + Техника -->
        <div class="content-block">
            <h2>👥 Команда и подход к работе</h2>
            <p>Наша главная сила — это <strong>опытный и сплоченный коллектив профессионалов</strong>. Многие мастера работают в компании более 10-15 лет, что говорит о стабильности команды и преданности своему делу. Каждый сотрудник — специалист своего профиля с многолетним опытом работы на кровельных и фасадных объектах.</p>
            <p>Мы не гонимся за количеством — мы ценим качество каждого выполненного объекта. Наша репутация строилась годами, и мы дорожим каждым довольным клиентом.</p>
            <p>Мы работаем <strong>быстро и качественно</strong> — потому что понимаем: для клиента важны и сроки, и результат. Наш опыт позволяет выполнять работы оперативно, без потери качества.</p>
        </div>

        <!-- Техника и стандарты -->
        <div class="content-block">
            <h2>🔧 Техника и стандарты</h2>
            <p>Мы <strong>идем в ногу со временем</strong> и постоянно обновляем парк оборудования и инструментов. В нашей работе применяются:</p>
            <ul>
                <li>Современные кровельные материалы и технологии</li>
                <li>Надежные фасадные системы от проверенных производителей</li>
                <li>Профессиональный инструмент ведущих мировых брендов</li>
                <li>Снаряжение для промышленных альпинистов</li>
            </ul>
            <p>Все работы выполняются в соответствии с <strong>действующими строительными нормами и стандартами (СНиП, ГОСТ)</strong>, что гарантирует безопасность и долговечность наших объектов.</p>
            
            <div class="highlight-box">
                🏆 Работаем с 1999 года — более 25 лет безупречной репутации
            </div>
        </div>

        <!-- Почему выбирают нас -->
        <div class="content-block">
            <h2>✅ Почему выбирают нас</h2>
            <div class="advantages-grid">
                <div class="advantage-item">
                    <h4>25 лет опыта</h4>
                    <p>Знаем северную специфику и особенности климата</p>
                </div>
                <div class="advantage-item">
                    <h4>Сплоченная команда</h4>
                    <p>Мастера с многолетним стажем</p>
                </div>
                <div class="advantage-item">
                    <h4>Личный контроль</h4>
                    <p>Руководитель на каждом объекте</p>
                </div>
                <div class="advantage-item">
                    <h4>Современная техника</h4>
                    <p>Надежный инструмент и оборудование</p>
                </div>
                <div class="advantage-item">
                    <h4>СНиП и ГОСТ</h4>
                    <p>Работаем по стандартам</p>
                </div>
                <div class="advantage-item">
                    <h4>Честные цены</h4>
                    <p>Прозрачная смета</p>
                </div>
                <div class="advantage-item">
                    <h4>Гарантия</h4>
                    <p>Отвечаем за качество</p>
                </div>
            </div>
        </div>

        <!-- Принципы -->
        <div class="content-block">
            <h2>📋 Наши принципы</h2>
            <ul class="principles-list">
                <li><strong>Качество и скорость</strong> — умеем делать и хорошо, и быстро</li>
                <li><strong>Честность с клиентом</strong> — на каждом этапе работы</li>
                <li><strong>Прозрачная смета</strong> — никаких скрытых платежей</li>
                <li><strong>Соблюдение сроков</strong> — ценим ваше время</li>
                <li><strong>Следование стандартам</strong> — работаем по правилам</li>
            </ul>
        </div>

    </div>

    @include('partials.footer')

</body>
</html>