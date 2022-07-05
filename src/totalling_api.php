<?php
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents('php://input'), true);

$dsn = 'mysql:host=localhost;dbname=u22;charset=utf8mb4';
$db_user = 'root';
$db_password = '';
$pdo = new PDO($dsn, $db_user, $db_password,);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT totalling FROM statuses WHERE users_id = :users_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':users_id', $data['users_id']);
$stmt->execute();
echo json_encode($stmt->fetch());
