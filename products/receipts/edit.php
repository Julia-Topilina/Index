<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$goods = $pdo->query("SELECT * FROM goods")->fetchAll(PDO::FETCH_ASSOC);
$receipt = $pdo->query("SELECT * FROM receipts WHERE id='$id'")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поступление</title>
</head>
<body>
<form action="/products/receipts/actions/update.php" method="post">
    <select name="good_id">
        <?php foreach ($goods as $good) : ?>
            <option value="<?=$good['id']?>"><?= $good['name']?></option>
        <?php endforeach; ?>
    </select>
    <input type="hidden" name="id" value="<?= $receipt['id']?>">
    <input type="date" name="date" value="<?= $receipt['date']?>">
    <input type="number" name="amount" value="<?= $receipt['amount']?>">
    <input type="submit" value="Сохранить">
</form>
</body>
</html>