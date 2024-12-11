<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$goods= $pdo ->query("SELECT * FROM goods WHERE id = '$id'" ) ->fetch(PDO::FETCH_ASSOC);
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
<form method="post" action="actions/update.php">
    <input name="id" type="hidden" value="<?= $goods['id'] ?>">
    <input name="name" type="text" id="name"   value="<?= $goods['name'] ?>">
    <input name="price" type="number" id="price"   value="<?= $goods['price'] ?>">
    <input name="article" type="number" id="article"   value="<?= $goods['article'] ?>">
    <input type="submit" id="btn" value="Сохранить">
</form>
</body>
</html>
