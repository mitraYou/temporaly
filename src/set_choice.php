<?php
$data = json_decode(file_get_contents('php://input'), true);

$totalling = 0;

for ($i = 0; $i < count($data['choice'], COUNT_RECURSIVE); $i++) {
	$totalling += $data['choice'][$i];
}


require("db_connect.php");

$sql = 'INSERT INTO users_answers_questions (users_id,questions_id,choice) VALUES (:users_id,:questions_id,:choice)';
$stmt = $pdo->prepare($sql);
for ($i = 0; $i < 5; $i++) {
	$stmt->bindValue(':users_id', $data['users_id']);
	$stmt->bindValue(':questions_id', $data['questions_id'][$i]);
	$stmt->bindValue(':choice', $data['choice'][$i]);
	$stmt->execute();
}
$sql = 'INSERT INTO statuses (users_id,totalling) VALUES (:users_id,:totalling)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':users_id', $data['users_id']);
$stmt->bindValue(':totalling', $totalling);
$stmt->execute();
