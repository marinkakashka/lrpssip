СИСТЕМНЫЕ ТРЕБОВАНИЯ
OSPanel (или другой локальный сервер; PHP 8.0 или выше)
PHP 8.0 или выше
MySQL 5.7 или выше
Веб-браузер (Chrome, Firefox, Edge)
УСТАНОВКА
2.1. Скопируйте папку проекта relax.local в директорию:
C:\OSPanel\home\
2.2. Запустите OSPanel
2.3. Создайте базу данных:
Откройте phpMyAdmin (http://localhost/phpmyadmin или адрес из OSPanel)
Создайте БД с именем relax_db
Импортируйте дамп database.sql из корня проекта relax.local
НАСТРОЙКА ПОДКЛЮЧЕНИЯ К БД
Файл: relax.local/api/db.php
Настройки по умолчанию:
$hosts    = ['127.0.0.1', 'localhost', '127.127.126.32'];$dbname   = 'relax_db';$username = 'root';$password = '';
4.ДОСТУП К САЙТУ
Главная страница:
http://relax.local/relax.html
Страница магазина:
http://relax.local/shop.html
5.УЧЕТНЫЕ ЗАПИСИ ДЛЯ ВХОДА
Администратор:
Логин: admin@relax.com
Пароль: admin123
Клиент:
Зарегистрируйте нового пользователя на сайте через форму «Регистрация» (логин и пароль задаются при регистрации).
Логин akiriluk048@gmail.com
Пароль qwerty