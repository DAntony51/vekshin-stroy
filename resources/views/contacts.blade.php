<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }
        h1 { color: #2c3e50; border-bottom: 3px solid #3498db; padding-bottom: 10px; display: inline-block; margin-bottom: 30px; }

        /* Контакты - три карточки */
        .contacts-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 40px; }
        .contact-card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center; }
        .contact-card h3 { color: #3498db; margin-top: 0; font-size: 1.2em; }
        .contact-card p { font-size: 1.1em; color: #555; margin: 10px 0; line-height: 1.5; }
        .contact-card a { color: #2c3e50; text-decoration: none; font-weight: bold; }
        .contact-card a:hover { color: #3498db; }
        .work-hours { font-size: 0.95em !important; color: #7f8c8d !important; margin-top: 15px !important; }

        /* Реквизиты - две колонки */
        .requisites-section {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 40px;
            border-top: 5px solid #3498db;
        }
        .requisites-section h2 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 30px;
            font-size: 1.8em;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .requisites-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        .requisites-main h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.3em;
        }
        .requisites-main p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .requisites-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
        }
        .requisite-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #dee2e6;
        }
        .requisite-item:last-child { border-bottom: none; }
        .requisite-label { color: #7f8c8d; font-weight: 500; }
        .requisite-value { color: #2c3e50; font-weight: 600; font-family: monospace; font-size: 1.05em; }

        /* Карта */
        .map-container { border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: 1px solid #ddd; }
        .map-section { margin-bottom: 40px; }
        .map-section h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 1.8em;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        @media (max-width: 768px) {
            .requisites-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>Наши контакты</h1>

        <!-- Три карточки с контактами -->
        <div class="contacts-grid">
            <div class="contact-card">
                <h3>📞 Телефоны</h3>
                <p><a href="tel:+78152690734">69-07-34</a></p>
                <p><a href="tel:+78152521555">521-555</a></p>
                <p><a href="tel:+79212800504">+7 (921) 280-05-04</a></p>
            </div>

            <div class="contact-card">
                <h3>✉️ Электронная почта</h3>
                <p><a href="mailto:vekshinsk@mail.ru">vekshinsk@mail.ru</a></p>
                <p class="work-hours">Для заявок и вопросов</p>
            </div>

            <div class="contact-card">
                <h3>📍 Адрес и режим работы</h3>
                <p>г. Мурманск,<br>ул. Домостроительная, 2к12</p>
                <p class="work-hours">Пн-Пт: 08:30 - 17:00<br>Сб: 09:00 - 13:00<br>Вс: Выходной</p>
            </div>
        </div>

        <!-- Реквизиты компании -->
        <div class="requisites-section">
            <h2>📋 Реквизиты компании</h2>
            <div class="requisites-grid">
                <div class="requisites-main">
                    <h3>ООО "Векшин"</h3>
                    <p><strong>Директор:</strong> Антоняк Сергей Иванович</p>
                    <p><strong>Юридический адрес:</strong><br>г. Мурманск, ул. Героев Рыбачьего, 16а</p>
                </div>
                <div class="requisites-details">
                    <div class="requisite-item">
                        <span class="requisite-label">ИНН</span>
                        <span class="requisite-value">5193200563</span>
                    </div>
                    <div class="requisite-item">
                        <span class="requisite-label">КПП</span>
                        <span class="requisite-value">519001001</span>
                    </div>
                    <div class="requisite-item">
                        <span class="requisite-label">ОГРН</span>
                        <span class="requisite-value">1035100153890</span>
                    </div>
                    <div class="requisite-item">
                        <span class="requisite-label">Дата регистрации</span>
                        <span class="requisite-value">1999 год</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Карта -->
        <div class="map-section">
            <h2>🗺️ Как нас найти</h2>
            <div class="map-container">
                <iframe src="https://yandex.ru/map-widget/v1/?text=Мурманск,+ул.+Домостроительная+2к12&z=16" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>
</html>