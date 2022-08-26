<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="css/chat.css" rel="stylesheet" type="text/css">
    <link  href="css/reset.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons%7CMaterial+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>chat</title>
</head>
<body>
	
	<?php include('./components/header.php'); ?>
		

    <p id="date">日付</p>
    <table class="you_chat_box">
        <tbody>
            <tr>
                <td class="icon_box"><img class="icon" src="images/icon.png" alt="アイコン画像"><div class="name">田中太郎</div></td>
                <td><div class="chat_box">さああああああああああああああああああああああああああああああああああああああああああああああああんぱんまん</div></td>
                <td class="time_box">18:40</td>
            </tr>
        </tbody>
    </table>

    <table class="my_chat_box">
        <tbody>
            <tr>
                <td class="time_box">18:40</td>
                <td><div class="chat_box">さああああああああああああああああああああああああああああああああああああああああああああああああんぱんまん</div></td>
            </tr>
        </tbody>
    </table>



    <div class="msg-form">
        <input type="text" id="js-local-text" placeholder="Aa">
        <a><i class="material-icons icon-small-size pointer">send</i></a>
    </div>

</body>
</html>
