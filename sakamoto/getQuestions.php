
<?php

class Questions extends PDO {
  

  private $questions = 20;

  public function getQuestions() {
      $results = []
      for ($i = 1; $i <= 5; $i++) {
          $randInt = random_int(1, $this->questions);
          $sql = "SELECT id FROM `questions` WHERE weight = " . $i . "ORDER BY id = rand() LIMIT 1";
          $results[i] = $this->pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
      }

      return $results;
  }
}
