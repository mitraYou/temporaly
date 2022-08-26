<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/consultation.css" rel="stylesheet" type="text/css">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name=”viewport” content=”width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no”>

    <title>Document</title>
</head>

<body>
	<?php include('./includes/header.php'); ?>
    <div class="top-kakoi">
        <h1 class="questionnaire-midasi">今のキモチ</h1>
        <!-- 感情の吹き出し -->
        <div >
        <div class="emotion">
            <img src="images/subicon_1_0.png" alt=""><!-- 画像は気持ちによって変わる -->
          </div>
        </div>
        <!-- 吹き出しここまで -->
        <!-- <div class="box"> -->
        <!-- <div class="top-catbox"> -->
        <img src="images/animal_0.png" class="result_top-cat">
        <!-- </div> -->
        <!-- <div class="heart">
                    <div class="pyon">
                        <img src="images/FYI04772374-removebg-preview.png">
                    </div>
                </div> -->
        <!-- </div> -->
        <h1 class="questionnaire-midasi" id="result"></h1>
		<?php include('./includes/consultationBtn.php'); ?>
    </div>
    <script src="js/result.js"></script>
</body>

</html>
