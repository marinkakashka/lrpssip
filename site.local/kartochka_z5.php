<?php
echo "<h2>5. Работа со строками</h2>";
echo "<p>Задание: Работа со строковыми переменными (n = 11)</p>";

$s1 = "Я люблю Беларусь";
$s2 = "Я учусь в Политехническом колледже";

echo "<p><strong>Строка S1:</strong> \"$s1\"</p>";
echo "<p><strong>Строка S2:</strong> \"$s2\"</p>";

// 1. Длина строки S2
echo "<h4>1. Длина строки S2</h4>";
$length = strlen($s2);
echo "<p>В строке S2 <strong>$length</strong> символов</p>";

// 2. 11-й символ в строке S1 (n = 11)
echo "<h4>2. 11-й символ в строке S1 (n = 11)</h4>";
$position = 11; // номер варианта
// Для корректной работы с кириллицей используем mb_substr
$char = mb_substr($s1, $position - 1, 1, 'UTF-8');
$ascii_code = ord($char);

echo "<p>11-й символ в строке S1: <strong>'$char'</strong></p>";
echo "<p>ASCII код этого символа: <strong>$ascii_code</strong></p>";

// 3. Замена слова в строке S1
echo "<h4>3. Замена слова в строке S1</h4>";
$new_s1 = str_replace("Беларусь", "Гродно", $s1);
echo "<p>Было: \"$s1\"</p>";
echo "<p>Стало: \"$new_s1\"</p>";
?>