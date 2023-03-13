<?php
$Link13 = 'page.php'; //для перехода на титульную страницу

echo "<h1>Рандомная буква (a,b,c)</h1>";
echo "<h4>Обновите страницу</h4>";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo array_rand($arr);

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
