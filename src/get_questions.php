<?php

require ("db_connect.php");

$results = [];
for ($i=0; $i < 5; $i++) {
    $sql = 'SELECT * FROM questions WHERE weight = ' . $i . ' ORDER BY id = rand() LIMIT 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results[$i] = $stmt->fetch();
}
echo json_encode($results);
