<?php
$Link13 = 'page.php'; //для перехода на титульную страницу

$arr = ["a","b","c","b","a"];
var_dump(array_count_values($arr));

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
