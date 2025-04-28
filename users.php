<?php


// Автозагрузчик классов
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Инициализация счётчиков
use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Создание пользователей
$User1 = new User("Иван Иванов", "ivan123", "password123");
$User2 = new User("Петр Петров", "petr2003", "pass123");
$User3 = new User("Владислав Герасин", "Vladgk4", "zxcqwe");

// Вывод информации
echo "<h2>Информация о пользователе:</h2>";
$User1->showInfo(); 
$User2->showInfo(); 
$User3->showInfo();

echo "<hr>";
$SuperUser = new SuperUser("SuperUser", "sup", "Ussrersdfs12345", "Administrator");
$SuperUser->showInfo(); 
echo "<hr>";

// Статистика
echo "<h2>Подсчёт пользователей:</h2>";
echo "Обычные пользователи: " . User::$count . "<br>";
echo "Супер-пользователи: " . SuperUser::$count . "<br>";

// Массив информации
echo "<h2>Информация о суперпользователе:</h2>";
print_r($SuperUser->getInfo());
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
    <title> Пользователи</title>
</head>
</html>
