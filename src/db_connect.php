<?php
header("Access-Control-Allow-Origin: *");
$dsn = 'mysql:host=localhost;dbname=u22;charset=utf8mb4';
$db_user = 'root';
$db_password = '';
$pdo = new PDO($dsn, $db_user, $db_password,);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
