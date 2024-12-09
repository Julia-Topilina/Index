<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$name = $_POST['name'];
$price = $_POST['price'];
$article = $_POST['article'];
$goods = $pdo->query("insert into goods (name, price, article) values ('$name','$price', '$article')");
header('Location: /admin/goods/index.php');