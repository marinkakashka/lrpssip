<?php
// Задание 2. Работа с датой, временем, календарём (вариант 25)
// Функция принимает дату в формате "год-месяц-день" и возвращает количество дней в этом месяце.

function getDaysInMonth(string $dateString): ?int
{
    $date = DateTime::createFromFormat('Y-m-d', $dateString);

    if (!$date || $date->format('Y-m-d') !== $dateString) {
        return null;
    }

    $year  = (int)$date->format('Y');
    $month = (int)$date->format('m');

    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

// Пример использования функции
$inputDate = '2026-02-27';
$days = getDaysInMonth($inputDate);

if ($days === null) {
    echo "Неверный формат даты: {$inputDate}";
} else {
    echo "Дата: {$inputDate}<br>";
    echo "Количество дней в месяце: {$days}";
}
?>