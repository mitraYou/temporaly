<?php

class PDO {
  
  /* Propaties */
  const DB[NAME] = 'cri_sortable';
  const DB[HOST] = 'localhost';
  const DB[CHAR] = 'utf8';
  const USER     = 'root';
  const PASS     = 'root';

  /* Methods */
  public function pdo(){
    $dsn  = "mysql:dbname=" . self::DB[NAME] . "; host=" . self::DB[HOST] . "; charset=" . self::DB[CHAR];
    $user = self::USER;
    $pass = self::PASS;
    $opt  = [];
    try{
      $pdo = new PDO($dsn, $user, $pass, $opt);
    }catch(Exception $e){
      echo 'Error occurred: '.$e->getMessage;
      die();
    }
    return $pdo;
  }
}
