<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$receipts = $pdo->query("SELECT receipts.*, goods.name AS good 
                                FROM receipts 
                                LEFT JOIN goods ON goods.id = receipts.good_id")->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поступления</title>
</head>
<style>
    table, td{
     padding: 2px;
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
<body>
<h1>Поступление товара</h1>
<table>
    <tr>
        <td>#</td>
        <td>Дата</td>
        <td>Количество</td>
        <td>Товар</td>
    </tr>

    <?php foreach ($receipts as $receipt): ?>

        <tr>
            <td><?= $receipt['id']?></td>
            <td><?= $receipt['date']?></td>
            <td><?= $receipt['amount']?></td>
            <td><?= $receipt['good']?></td>
            <td><a href="/products/receipts/edit.php?id=<?=$receipt['id']?>">Изменить</a></td>
            <td><a href="/products/receipts/actions/delete.php?id=<?=$receipt['id']?>">Удалить</a></td>
        </tr>
    <?php endforeach;?>
    <a href="create.php">Добавить</a>
</table>
</body>
</html>