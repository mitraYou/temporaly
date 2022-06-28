<?php
$kimoti_point = ( (int) $_POST['kimoti_point']) + ( (int) $_POST['mon3']);

echo '気持ち数値:'.$kimoti_point."\n";

if($kimoti_point <= 3){
    echo '大丈夫';
}else if($kimoti_point <= 6){
    echo '気分転換をしよう';
}else if($kimoti_point <= 9){
    echo '危険気味';
}else if($kimoti_point <= 12){
    echo '危険';
}

//$kimoti_pointをDBに保存