<?php
$Link13 = 'page.php'; //для перехода на титульную страницу

$arr = [0,1,2,4,5,7,8,9];
echo $arr[count($arr) - 1];

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
