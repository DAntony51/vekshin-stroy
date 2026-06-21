<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 900px; margin: 40px auto; padding: 0 20px; }
        h1 { color: #2c3e50; border-bottom: 3px solid #3498db; padding-bottom: 10px; display: inline-block; margin-bottom: 30px; }

        .contacts-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 40px; }
        .contact-card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center; }
        .contact-card h3 { color: #3498db; margin-top: 0; font-size: 1.2em; }
        .contact-card p { font-size: 1.1em; color: #555; margin: 10px 0; line-height: 1.5; }
        .contact-card a { color: #2c3e50; text-decoration: none; font-weight: bold; }
        .contact-card a:hover { color: #3498db; }
        .work-hours { font-size: 0.95em !important; color: #7f8c8d !important; margin-top: 15px !important; }
        .map-container { border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: 1px solid #ddd; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>Наши контакты</h1>

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

        <div class="map-container">
            <iframe src="https://yandex.ru/map-widget/v1/?text=Мурманск,+ул.+Домостроительная+2к12&z=16" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>
    </div>
@include('partials.footer')
</body>
</html>
