<?php
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
<form action="actions/store.php" method="post">
    <input type="text" name="name" placeholder="Название товара" id="name">
    <input type="number" placeholder="Цена" id="price" name="price">
    <input type="number" placeholder="Артикул" id="article" name="article">
    <input type="submit" value="Отправить" id="btn" >
</form>
</body>
</html>
