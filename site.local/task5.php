<?php
// Задание 6. Пользовательская функция (вариант 25)
// Необходимо организовать расчёт по формуле:
// z = (x^2 + 15y - sqrt(3)) / (6x^2)
// Для вычислений используется пользовательская функция.

function calcZ(float $x, float $y): ?float
{
    if ($x == 0.0) {
        return null; // деление на ноль недопустимо
    }

    $numerator   = $x ** 2 + 15 * $y - sqrt(3);
    $denominator = 6 * ($x ** 2);

    return $numerator / $denominator;
}

$x = 2.0;
$y = -10;

echo "<strong>Исходные данные:</strong><br>";
echo "x = {$x}<br>";
echo "y = {$y}<br>";

$result = calcZ($x, $y);

if ($result === null) {
    echo "<span style='color: red;'>Ошибка: деление на ноль (x = 0).</span>";
} else {
    echo "<strong>Результат вычисления z:</strong> {$result}<br>";
}
?>