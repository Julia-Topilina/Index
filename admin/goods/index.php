<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$goods = $pdo->query("SELECT * FROM goods")->fetchAll(PDO::FETCH_ASSOC);
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
<h1>ПАНЕЛЬ АДМИНИСТРАТОРА</h1>
<h1>Список товаров</h1>
<table>
    <thead>
    <td>#</td>
    <td>name</td>
    <td>price</td>
    <td>article</td>
    </thead>
    <tbody>
    <?php foreach ($goods as $good): ?>
    <tr>
        <td><?= $good['id'] ?></td>
        <td><?= $good['name'] ?></td>
        <td><?= $good['price'] ?></td>
        <td><?= $good['article'] ?></td>
        <td><a id="update" href="/admin/goods/edit.php?id=<?= $good['id'] ?>">Изменить</a></td>
        <td><a id="delete" href="actions/delete.php?id=<?= $good['id'] ?>">Удалить</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="create.php" id="create">Добавить товар</a>
<a href="/admin/index.php">Назад</a>
</body>
</html>