<?php
$kimoti_point = $_POST['mon1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数値読み取り</title>
</head>
<body>
    <h2>あああ</h2>
    <form action="mon3.php" method="post">
        いいえ<input type="range" name="mon2" min="0" max="4" value="2">はい
        <input type="hidden" name="kimoti_point" value="<?php echo $kimoti_point ?>">
        <input type="submit" value="次の質問へ">
    </form>

</body>
</html>