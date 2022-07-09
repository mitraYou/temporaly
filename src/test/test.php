<?php
header("Access-Control-Allow-Origin: *");
$dsn = 'mysql:host=localhost;dbname=u22;charset=utf8mb4';
$db_user = 'root';
$db_password = '';
$pdo = new PDO($dsn, $db_user, $db_password,);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = json_decode(file_get_contents('php://input'), true);

$sql = 'INSERT INTO test (name,password,animal) VALUES (:name,:password,:animal)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $data['name']);
$stmt->bindValue(':password', $data['password']);
$stmt->bindValue(':animal', $data['animal']);
$stmt->execute();