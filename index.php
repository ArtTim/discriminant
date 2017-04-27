<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вычисление дискриминанта</title>
</head>
<body>
<?php
require ('php/abc.php');
require ('php/formula.php');
?>

<form action="php/abc.php" method="post">
    a <input type="number" name="a" /><br />
    b <input type="number" name="b" /><br />
    c <input type="number" name="c" /><br />
    <input type="submit" name="submit" value="Вычислить" />
</form>

</body>
</html>