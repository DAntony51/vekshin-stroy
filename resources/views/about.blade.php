<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О компании | ВЕКШИН Мурманск</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f6f8; color: #333; margin: 0; }
        .container { max-width: 800px; margin: 40px auto; background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-bottom: 3px solid #3498db; padding-bottom: 10px; display: inline-block; }
        p { line-height: 1.8; font-size: 1.1em; color: #555; }
    </style>
</head>
<body>

    @include('partials.header')

    <div class="container">
        <h1>О нашей компании</h1>
        <p>Мы — надежная строительная фирма «ВЕКШИН», специализирующаяся на кровельных и фасадных работах в Мурманске и области. Наш опыт позволяет решать задачи любой сложности: от ремонта небольшого козырька до монтажа вентилируемых фасадов на многоэтажных зданиях.</p>
        <p>Мы используем только сертифицированные материалы, адаптированные к суровым северным условиям, и предоставляем гарантию на все виды выполненных работ. Наша главная цель — сделать ваш дом теплым, сухим и красивым.</p>
    </div>
@include('partials.footer')
</body>
</html>
