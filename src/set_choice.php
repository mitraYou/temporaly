<?php

$data = json_decode(file_get_contents('php://input'), true);

$totalling;
/***ここから***/

////data['choice'][0]からdata['choice'][4]に回答入ってます





////totallingに結果を入れてください

/***ここまで***/

$dsn = 'mysql:host=localhost;dbname=u22;charset=utf8mb4';
$db_user = 'root';
$db_password = '';
$pdo = new PDO($dsn, $db_user, $db_password,);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO users_answers_questions (users_id,questions_id,choice) VALUES (:users_id,:questions_id,:choice)';
$stmt = $pdo->prepare($sql);
for ($i=0; $i < 5; $i++) { 
    $stmt->bindValue(':users_id', $data['users_id']);
    $stmt->bindValue(':questions_id', $data['questions_id'][$i]);
    $stmt->bindValue(':choice', $data['choice'][$i]);
    $stmt->execute();
}
$sql = 'INSERT INTO statuses (totalling) VALUES (:totalling)';
$stmt->bindValue(':totalling', $totalling);
$stmt->execute();