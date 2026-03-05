<html>
<head>
<title>Файловая система</title>
</head>
<body>


<?php


//Найти и написать свойства 
echo "<h1>file: task1.php</h1>";
echo "<p>В последний раз редактировался: ".date("r", filemtime("task1.php"));
echo "<p>В последний раз был открыт:" . date("r", fileatime("task1.php"));
echo "<p>Размер: ". filesize("task1.php") . "байт";

?>

</body>
</html>