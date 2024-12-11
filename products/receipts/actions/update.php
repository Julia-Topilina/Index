<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$id = $_POST['id'];
$good_id = $_POST['good_id'];
$date = $_POST['date'];
$amount = $_POST['amount'];

$pdo->query("UPDATE receipts SET date = '$date', amount = '$amount', good_id = '$good_id' WHERE id = '$id'");
header('Location: /products/receipts/index.php');