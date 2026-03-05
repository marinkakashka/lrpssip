<?php
// index.php - Главный файл, включает остальные

echo "<html>";
echo "<head><title>PHP - Вариант 11</title></head>";
echo "<body>";
echo "<h1>Лабораторная работа PHP</h1>";
echo "<h3>Вариант 11</h3>";
echo "<hr>";


// ЗАДАНИЕ 1: Использование include

echo "<h3>1. Использование оператора include</h3>";
echo "<p>Задание: Объединить 2 задания в один файл index.php</p>";

echo "<p style='color:green;'>ВНИМАНИЕ: Сейчас включим два файла:</p>";

// ВКЛЮЧЕНИЕ ФАЙЛОВ
echo "<p>1. Включаем файл task2.php:</p>";
include 'task2.php'; //  содержимое z2.php 

echo "<p>2. Включаем файл task3.php:</p>";
include 'task3.php'; // содержимое z3.php 

echo "<p style='color:green;'>✓ Задания 2 и 3 реально включены через include!</p>";
echo "<hr>";
// ЗАДАНИЕ 4: Работа с массивами

echo "<h3>4. Работа с массивами</h3>";
echo "<p>Задание: Создать массив студентов со стипендиями</p>";

$students = [
    "Иванов" => 200,
    "Петров" => 340,  
    "Сидоров" => 800
];

echo "<p>Массив студентов:</p>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Фамилия</th><th>Стипендия</th></tr>";

$total = 0;
foreach ($students as $surname => $money) {
    echo "<tr>";
    echo "<td>$surname</td>";
    echo "<td>$money руб.</td>";
    echo "</tr>";
    $total = $total + $money;
}

echo "<tr style='background:#e0e0e0;'>";
echo "<td><strong>ВСЕГО:</strong></td>";
echo "<td><strong>$total руб.</strong></td>";
echo "</tr>";
echo "</table>";
echo "<hr>";

// ЗАДАНИЕ 5: Работа со строками

echo "<h3>5. Работа со строками</h3>";
echo "<p>Задание: Работа с двумя строками</p>";

$s1 = "Я люблю Беларусь";
$s2 = "Я учусь в Политехническом колледже";

echo "<p><strong>Строка S1:</strong> \"$s1\"</p>";
echo "<p><strong>Строка S2:</strong> \"$s2\"</p>";

echo "<h4>1. Длина строки S2</h4>";
$length = strlen($s2);
echo "<p>В строке S2 $length символов</p>";

echo "<h4>2. 11-й символ в строке S1 (n=11)</h4>";
$char = $s1[10];
echo "<p>11-й символ: '$char'</p>";
$code = ord($char);
echo "<p>ASCII код этого символа: $code</p>";

echo "<h4>3. Замена слова в строке S1</h4>";
$new_s1 = str_replace("Беларусь", "Гродно", $s1);
echo "<p>Было: \"$s1\"</p>";
echo "<p>Стало: \"$new_s1\"</p>";
echo "<hr>";


// ЗАДАНИЕ 6: Пользовательская функция

echo "<h3>6. Пользовательская функция</h3>";
echo "<p>Задание: Создать функцию для вычисления формулы:</p>";
echo "<p>p = (lg(x) - e^(x+y) + x^y) / (√(5 + y^4) + |x³ - ln(y)|)</p>";

function calculate($x, $y) {
    if ($x <= 0 || $y <= 0) {
        return "Ошибка! x и y должны быть больше 0";
    }
    
    $top = log10($x) - exp($x + $y) + pow($x, $y);
    $bottom = sqrt(5 + pow($y, 4)) + abs(pow($x, 3) - log($y));
    
    if ($bottom == 0) {
        return "Ошибка! Деление на ноль";
    }
    
    return $top / $bottom;
}

echo "<h4>Примеры работы функции:</h4>";

$x1 = 2;
$y1 = 1;
echo "<p>При x = $x1, y = $y1:</p>";
echo "<p>calculate($x1, $y1) = " . calculate($x1, $y1) . "</p>";

$x2 = 3;
$y2 = 2;
echo "<p>При x = $x2, y = $y2:</p>";
echo "<p>calculate($x2, $y2) = " . calculate($x2, $y2) . "</p>";

echo "<hr>";


echo "</body>";
echo "</html>";
?>