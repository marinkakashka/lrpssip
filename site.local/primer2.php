<html>
<head>
<title>FileSystemObject</title>
</head>
<body>
&lt;?php
// Открыть папку
$folder = opendir("../../ /");
// Цикл по всем файлам папки
while (($entry = readdir($folder)) != "") {
echo $entry . "<br />";
}
// Закрыть папку
$folder = closedir($folder);
?&gt;
</body>
</html>