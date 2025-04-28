<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="image.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проектирование архитектуры корпоративных информационных систем</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --dark-color: #1b263b;
            --light-color: #f8f9fa;
            --success-color: #4cc9f0;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }
        
        .top-bar {
            height: 6px;
            background: linear-gradient(90deg, #4361ee, #3a0ca3);
            margin-bottom: 20px;
        }
        
        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 30px;
            background: white;
            box-shadow: var(--box-shadow);
            border-radius: var(--border-radius);
            border-top: 5px solid var(--primary-color);
        }
        
        h1 {
            color: var(--dark-color);
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            position: relative;
            padding-bottom: 15px;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--success-color));
            border-radius: 3px;
        }
        
        .custom-list {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .custom-list li {
            margin: 0;
        }
        
        .custom-list a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            background-color: white;
            color: var(--dark-color);
            text-decoration: none;
            border-radius: var(--border-radius);
            transition: var(--transition);
            box-shadow: var(--box-shadow);
            border-left: 4px solid var(--primary-color);
            font-weight: 500;
        }
        
        .custom-list a:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            background-color: var(--primary-color);
            color: white;
        }
        
        .custom-list a::before {
            content: '→';
            margin-right: 15px;
            color: var(--accent-color);
            transition: var(--transition);
        }
        
        .custom-list a:hover::before {
            color: white;
            transform: translateX(5px);
        }
        
        .dropdown-content {
            display: none;
            margin-top: 10px;
            padding-left: 20px;
            animation: fadeIn 0.3s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown-content a {
            background-color: #f8f9fa;
            color: var(--dark-color);
            padding: 12px 20px;
            margin-bottom: 8px;
            border-left: 4px solid var(--accent-color);
            font-weight: normal;
        }
        
        .dropdown-content a:hover {
            background-color: var(--accent-color);
        }
        
        .php-logo {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 70px;
            height: auto;
            opacity: 0.9;
            transition: var(--transition);
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }
        
        .php-logo:hover {
            transform: scale(1.1) rotate(10deg);
            opacity: 1;
        }
        
        .corner-icon {
            position: fixed;
            top: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            background-color: white;
            padding: 5px;
            object-fit: contain;
        }
        
        .corner-icon:hover {
            transform: scale(1.1) rotate(15deg);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
        
        @media (max-width: 768px) {
            main {
                margin: 15px;
                padding: 20px;
            }
            
            .custom-list a {
                padding: 12px 15px;
            }
            
            .php-logo {
                width: 50px;
                bottom: 15px;
                right: 15px;
            }
            
            .corner-icon {
                width: 35px;
                height: 35px;
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="top-bar"></div>

    <main>
        <h1>Лабораторные работы</h1>
        <ul class="custom-list">
            <li><a href="users.php" title="Классы и интерфейсы">Лаба 1 - Классы и интерфейсы</a></li>
            
            <li class="dropdown">
                <a href="lab2.html" title="Паттерны проектирования">Лаба 2 - Паттерны проектирования</a>
                <div class="dropdown-content">
                    <!-- Здесь могут быть подпункты -->
                </div>
            </li>
            
            <li class="dropdown">
                <a href="lab3.html" title="Паттерн Модель-Представление-Контроллер">Лаба 3 - MVC</a>
                <div class="dropdown-content">
                    <!-- Здесь могут быть подпункты -->
                </div>
            </li>
            
            <li><a href="news/news.php" title="Использование ООП с базой данных SQLite">Лаба 4 - Использование ООП с базой данных SQLite</a></li>
            <li><a href="lab5.php" title="Standard PHP Library">Лаба 5 - Standard PHP Library</a></li>
            <li><a href="lab6.html" title="Использование MVC фреймворка">Лаба 6 - Использование MVC фреймворка</a></li>
        </ul>
    </main>

    <img src="php.png" class="php-logo" alt="PHP логотип">

    <a href="https://img.plantuml.biz/plantuml/png/dLBDJW8n4ButsNUOn0j4u4B2WN0GFN4cnYEftR8qB2rfk-409E9LZpu8qHXHYBv2zusSPNzWqNXmczrclfdvvfkPlJ2MQXjDGezun8o5d59D9y12QWpCFGBuN58s3hIAf7-bGgNXPYGiprnA-rody5cpsKpHhjPgbe6jLiiZouJT2XjoS4zkuzRk9Rx3xmxF6jo7sxfrl8fNxjCz0ruRDExTgzl53-2-4Dt6Z-ujyM9SujZY-vwGqbjZDMKsKzpDp6l3TIx_7EPvr1BCICrwSgWgrKoLa9Rh8MKS-j6KwoInLq05Gy1jAIkjLguYwOIteM-ra46EXIeGiWpMOOgvCnpSQJ2kmWe632Tjsu32SiTWm9J43Y9cAqcLMifRAvYg1SLHUtckpxFKilYYtKC7MeK_ElY_gDgUxmzffqCjBQ-pgDVt0_R8mIuqU-INRNKMZSPnY4SkkFJnt_u6" target="_blank">
        <img src="paha.png" alt="Иконка" class="corner-icon" title="хукаю">
    </a>

</body>
</html>
