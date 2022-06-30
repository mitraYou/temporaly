<?php
$dsn = 'mysql:host=localhost;dbname=u22;charset=utf8mb4';
$db_user = 'root';
$db_password = '';
$pdo = new PDO($dsn, $db_user, $db_password,);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$results = [];
for ($i=0; $i < 5; $i++) {
    $sql = 'SELECT * FROM questions WHERE weight = ' . $i . ' ORDER BY id = rand() LIMIT 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results[$i] = $stmt->fetch();
}
echo json_encode($results);