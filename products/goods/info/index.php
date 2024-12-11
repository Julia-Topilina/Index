<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$info = $pdo->query("SELECT * FROM info")->fetchAll(PDO::FETCH_ASSOC);
$id = $_GET['id'];
$good = $pdo->query("SELECT * FROM goods WHERE id = '$id'")->fetch();

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
<h1>Информация о товаре</h1>
<p><?= $good['name']?></p>
<p><?= $good['price']?></p>
<p><?= $good['article']?></p>
<input class="text">
<a href="/products/goods/index.php">Назад</a>
</body>
</html>
