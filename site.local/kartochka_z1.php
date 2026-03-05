<?php
echo "<html>";
echo "<head><title>PHP - Лабораторная работа (Вариант 11) - Include объединение</title></head>";
echo "<body>";

echo "<h2>1. Использование оператора include</h2>";
// ВКЛЮЧЕНИЕ ВСЕХ ФАЙЛОВ С ЗАДАНИЯМИ
// Каждый include вставляет содержимое соответствующего файла в это место

include 'kartochka_z2.php';  // Задание 2: Работа с переменными и константами
echo "<hr>";

include 'kartochka_z3.php';  // Задание 3: Работа с операторами циклов
echo "<hr>";

include 'kartochka_z4.php';  // Задание 4: Работа с массивами
echo "<hr>";

include 'kartochka_z5.php';  // Задание 5: Работа со строками
echo "<hr>";

include 'kartochka_z6.php';  // Задание 6: Пользовательская функция
echo "<hr>";
echo "</body>";
echo "</html>";
?>