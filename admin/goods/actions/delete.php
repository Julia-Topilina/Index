<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$pdo->query("DELETE FROM goods WHERE id=" . $id);
header('Location:/admin/goods/index.php');