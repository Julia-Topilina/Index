<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$id = $_GET['id'];
$pdo->query("DELETE FROM receipts WHERE id = '$id'");

header('Location: /products/receipts/index.php');