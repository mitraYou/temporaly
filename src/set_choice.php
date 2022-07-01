<?php

$data = json_decode(file_get_contents('php://input'), true);

$totalling = 0;

////data['choice'][0]からdata['choice'][4]に回答入ってます

for ($i=0; $i < count($date['choice'],COUNT_RECURSIVE); $i++){
    $totalling += $date['choice'][$i]; 
}

if($totalling <= 3){
    echo '大丈夫';
}else if($totalling <= 6){
    echo '気分転換をしよう';
}else if($totalling <= 9){
    echo '危険気味';
}else if($totalling <= 12){
    echo '危険';
}

////totallingに結果を入れてください

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