<?php
echo "<h2>4. Работа с массивами</h2>";
echo "<p>Задание: Создать ассоциативный массив студентов со стипендиями</p>";

$students = [
    "Иванов" => 200,
    "Петров" => 340,
    "Сидоров" => 800
];

echo "<p>Массив студентов:</p>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Фамилия</th><th>Стипендия (руб.)</th></tr>";

$total = 0;
foreach ($students as $surname => $money) {
    echo "<tr>";
    echo "<td>$surname</td>";
    echo "<td align='right'>$money руб.</td>";
    echo "</tr>";
    $total += $money;
}

echo "<tr style='background-color:#e0e0e0; font-weight:bold;'>";
echo "<td>ИТОГО:</td>";
echo "<td align='right'>$total руб.</td>";
echo "</tr>";
echo "</table>";
?>