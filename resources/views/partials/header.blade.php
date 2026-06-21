<!-- resources/views/partials/header.blade.php -->
<header style="background: #2c3e50; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 12px 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">

        <!-- 1. Логотип (SVG-иконка крыши) и Название фирмы -->
        <a href="{{ route('services.index') }}" style="text-decoration: none; color: white; display: flex; align-items: center; gap: 12px;">

            <!-- SVG-иконка крыши -->
            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                <!-- Основная крыша -->
                <path d="M2 12L12 3L22 12" stroke="#3498db" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Стены дома -->
                <path d="M4 11V20H20V11" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Дверь -->
                <path d="M9 20V14H15V20" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <!-- Снег на крыше (акцент для Мурманска) -->
                <path d="M5 11.5L12 5L19 11.5" stroke="#2ecc71" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2"/>
            </svg>

            <div>
                <div style="font-weight: 800; font-size: 1.5em; line-height: 1.1; letter-spacing: 0.5px;">ВЕКШИН</div>
                <div style="font-size: 0.8em; color: #bdc3c7; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600;">Мурманск</div>
            </div>
        </a>

        <!-- 2. Меню навигации (5 пунктов) -->
        <nav style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
            <a href="{{ route('services.index') }}" style="color: white; text-decoration: none; font-weight: 600; transition: color 0.3s;">Услуги</a>
            <a href="{{ route('portfolio.index') }}" style="color: white; text-decoration: none; font-weight: 600; transition: color 0.3s;">Наши работы</a>
            <a href="{{ route('about') }}" style="color: white; text-decoration: none; font-weight: 600; transition: color 0.3s;">О нас</a>
            <a href="{{ route('contacts') }}" style="color: white; text-decoration: none; font-weight: 600; transition: color 0.3s;">Контакты</a>
            <a href="{{ route('vacancies.index') }}" style="color: white; text-decoration: none; font-weight: 600; transition: color 0.3s;">Вакансии</a>
        </nav>

        <!-- 3. Телефон для быстрой связи -->
        <a href="tel:+79212800504" style="color: #2ecc71; text-decoration: none; font-weight: bold; font-size: 1.1em; display: flex; align-items: center; gap: 5px; transition: color 0.3s;">
            📞 +7 (921) 280-05-04
        </a>
    </div>
</header>

<style>
    header nav a:hover { color: #3498db !important; }
    header > div > a:last-child:hover { color: #27ae60 !important; }

    /* Адаптивность для мобильных */
    @media (max-width: 900px) {
        header > div { flex-direction: column; text-align: center; gap: 15px; }
        header nav { gap: 15px; }
    }
</style>
