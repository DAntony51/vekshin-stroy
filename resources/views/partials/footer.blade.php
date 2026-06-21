<!-- resources/views/partials/footer.blade.php -->

<!-- Блок призыва к действию (Pre-footer) -->
<div style="background: #2ecc71; padding: 40px 20px; text-align: center;">
    <h2 style="color: white; margin: 0 0 15px 0; font-size: 1.8em;">Нужна консультация или бесплатный замер?</h2>
    <p style="color: #e8f8f5; margin-bottom: 25px; font-size: 1.1em;">Оставьте заявку, и мы перезвоним вам в течение 15 минут</p>
    <a href="{{ route('leads.create') }}" style="background: white; color: #27ae60; padding: 15px 35px; text-decoration: none; border-radius: 30px; font-weight: bold; font-size: 1.1em; transition: transform 0.2s; display: inline-block;">Оставить заявку</a>
</div>

<!-- Основной подвал -->
<footer style="background: #2c3e50; color: #ecf0f1; padding: 50px 20px 20px 20px;">
    <div style="max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">

        <!-- Колонка 1: О компании -->
        <div>
            <div style="font-weight: 800; font-size: 1.5em; color: white; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                🏠 ВЕКШИН
            </div>
            <p style="color: #bdc3c7; line-height: 1.6; font-size: 0.95em;">
                Профессиональные кровельные и фасадные работы в Мурманске и области. Гарантия качества, соблюдение сроков и честные цены.
            </p>
        </div>

        <!-- Колонка 2: Навигация -->
        <div>
            <h4 style="color: white; margin-top: 0; margin-bottom: 20px; font-size: 1.1em; border-bottom: 2px solid #3498db; display: inline-block; padding-bottom: 5px;">Навигация</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 2;">
                <li><a href="{{ route('services.index') }}" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">Наши услуги</a></li>
                <li><a href="{{ route('portfolio.index') }}" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">Выполненные работы</a></li>
                <li><a href="{{ route('about') }}" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">О компании</a></li>
                <li><a href="{{ route('vacancies.index') }}" style="color: #bdc3c7; text-decoration: none; transition: color 0.3s;">Вакансии</a></li>
            </ul>
        </div>

        <!-- Колонка 3: Контакты -->
        <div>
            <h4 style="color: white; margin-top: 0; margin-bottom: 20px; font-size: 1.1em; border-bottom: 2px solid #3498db; display: inline-block; padding-bottom: 5px;">Контакты</h4>
            <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.8; color: #bdc3c7;">
                <li style="margin-bottom: 10px;">📍 г. Мурманск, ул. Домостроительная, 2к12</li>
                <li style="margin-bottom: 10px;">📞 <a href="tel:+79212800504" style="color: white; text-decoration: none; font-weight: bold;">+7 (921) 280-05-04</a></li>
                <li style="margin-bottom: 10px;">✉️ <a href="mailto:vekshinsk@mail.ru" style="color: #bdc3c7; text-decoration: none;">vekshinsk@mail.ru</a></li>
                <li style="margin-top: 15px; font-size: 0.9em; color: #7f8c8d;">Пн-Пт: 08:30 - 17:00<br>Сб: 09:00 - 13:00</li>
            </ul>
        </div>
    </div>

    <!-- Нижняя полоска с копирайтом -->
    <div style="max-width: 1100px; margin: 0 auto; border-top: 1px solid #34495e; padding-top: 20px; text-align: center; color: #7f8c8d; font-size: 0.9em;">
        © {{ date('Y') }} ВЕКШИН Мурманск. Все права защищены.
    </div>
</footer>

<style>
    /* Подсветка ссылок при наведении */
    footer ul li a:hover { color: #3498db !important; }
    footer div > a:hover { transform: scale(1.05); }
</style>
