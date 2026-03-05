<?php

echo "<h2>6. Пользовательская функция</h2>";
echo "<p>Задание: Создать функцию для вычисления формулы:</p>";
echo "<p>p = (lg(x) - e^(x+y) + x^y) / (√(5 + y^4) + |x³ - ln(y)|)</p>";

function calculate_p($x, $y) {
    // Проверка области определения
    if ($x <= 0 || $y <= 0) {
        return "Ошибка! x и y должны быть больше 0 (для lg(x) и ln(y))";
    }
    
    // Вычисление числителя: lg(x) - e^(x+y) + x^y
    $numerator = log10($x) - exp($x + $y) + pow($x, $y);
    
    // Вычисление знаменателя: √(5 + y^4) + |x³ - ln(y)|
    $denominator = sqrt(5 + pow($y, 4)) + abs(pow($x, 3) - log($y));
    
    // Проверка деления на ноль
    if ($denominator == 0) {
        return "Ошибка! Деление на ноль";
    }
    
    $result = $numerator / $denominator;
    return round($result, 6); // округляем до 6 знаков
}

echo "<h4>Примеры работы функции:</h4>";

// Пример 1
$x1 = 2;
$y1 = 1;
$result1 = calculate_p($x1, $y1);
echo "<p><strong>Пример 1:</strong> x = $x1, y = $y1</p>";
echo "<p>p = $result1</p>";

// Пример 2
$x2 = 3;
$y2 = 2;
$result2 = calculate_p($x2, $y2);
echo "<p><strong>Пример 2:</strong> x = $x2, y = $y2</p>";
echo "<p>p = $result2</p>";

// Пример 3
$x3 = 1;
$y3 = 1;
$result3 = calculate_p($x3, $y3);
echo "<p><strong>Пример 3:</strong> x = $x3, y = $y3</p>";
echo "<p>p = $result3</p>";
?> 