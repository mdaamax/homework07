<?php
$Link13 = 'page.php'; //для перехода на титульную страницу

$arr_1 = [1,2,3];
$arr_2 = ['a','b','c'];

$result = array_merge($arr_1,$arr_2);
var_dump($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<br>
<a href="<?= $Link13 ?>">Ссылка для перехода на страницу с упраждениями</a>
</body>
</html>

