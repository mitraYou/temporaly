<?php
$kimoti_point = ( (int) $_POST['kimoti_point']) + ( (int) $_POST['mon2']);
// echo $kimoti_point;
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
    <h2>いいいい</h2>
    <form action="result.php" method="post">
        いいえ<input type="range" name="mon3" min="0" max="4" value="2">はい
        <input type="hidden" name="kimoti_point" value="<?php echo $kimoti_point ?>">
        <input type="submit" value="次の質問へ">
    </form>

</body>
</html>