<?php

$date = array(
    'questions'=>array(3,12,23,4,15),
    'answers'=>array(1,3,3,4,1));
echo print_r($date);

echo "<br>";
// echo $date["answers"][0];
for($i=0; $i<=4 ;$i++){
    echo "<br>";
    echo $date["answers"][$i];

}


$res = array_sum($date["answers"]);
echo "<br>";
echo "<br>";
echo "answersの合計値：".$res;
?>