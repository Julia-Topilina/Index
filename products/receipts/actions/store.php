<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$date = $_POST['date'];
$good_id = $_POST['good_id'];
$amount = $_POST['amount'];
$pdo->query("INSERT INTO receipts (date, good_id, amount) VALUES ('$date', '$good_id', '$amount')");
header('Location: /products/receipts/index.php');
