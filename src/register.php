<?php
$data = json_decode(file_get_contents('php://input'), true);

require("db_connect.php");

$sql = 'INSERT INTO users (userid,username,password) VALUES (:userid,:username,:password)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':userid', $data['userid']);
$stmt->bindValue(':username', $data['username']);
$stmt->bindValue(':password', $data['password']);
$stmt->execute();

// $sql = 'SELECT last_insert_id() from users';
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $id = $stmt->fetch();

$sql = 'INSERT INTO animals_users (animals_id,users_id,name) VALUES (:animals_id,:users_id,:name)';
$stmt = $pdo->prepare($sql);
// $stmt->bindValue(':animals_id', $data['animal']);
// $stmt->bindValue(':users_id', $id);
// $stmt->bindValue(':name', $data['animalname']);

$stmt->bindValue(':animals_id', '1');
$stmt->bindValue(':users_id', '1');
$stmt->bindValue(':name', '1');

$stmt->execute();
