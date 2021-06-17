<?php

$num = rand(1, 5);
if ($num == 1) {
    $result = '大吉'; // 乱数の結果によって$resultに値を入れる
} elseif ($num == 2) {
    $result = '中吉';
} elseif ($num == 3) {
    $result = '小吉';
} elseif ($num == 4) {
    $result = '凶';
} elseif ($num == 5) {
    $result = '大凶';
}
//echo $result;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>本日の運勢は<?= $result ?>です！！</h1>

</body>

</html>