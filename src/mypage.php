<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link  href="css/reset.css" rel="stylesheet">
    <link href="css/mypage.css" rel="stylesheet" type="text/css">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no”>
    
    <title>Document</title>
</head>
<body>
  <div class="body">
    <nav>
      <ul>
        <li><a href="#"><img src="images/icon.png" class="settei_icon"></a></li>
        <!-- <li><a href="#"><img src="images/gear1-removebg-preview.png" class="settei_icon"></a></li>
        <li><a href="#"><img src="images/gear1-removebg-preview.png" class="settei_icon"></a></li> -->
      </ul>
    </nav>
      <div class="kakoi">
        <h1 class="questionnaire-midasi">マイページ</h1>
        <!-- <div class="mypage_kakoi"> -->

          <div class="consultation_box">
            <div class="iconbox">
              <img src="images/animal_0.png" class="icon">
            </div>
          
            <form action="/form.php" method="post">
          <div class="flex_content-box">
            <div class="flex_content-item">
                <p class="partner_nickname">パートナーの名前</p>
                <input type="text" id="email" name="email" class="textbox">
                <p class="minyuuryoku">入力してね</p>
                <p class="my_nickname">わたしのニックネーム</p>
                <input type="text" id="email" name="email" class="textbox">
                <p class="minyuuryoku">入力してね</p>
            </div>
          </div>
          </div>
          <div class="flex_content-box">
            <div class="flex_content-item2">
                <p class="hennkou1">ユーザーID変更：</p>
            </div>
            <div class="flex_content-item2">
              <input type="text" id="" name="" class="textbox2">
            </div>
          </div>
          <hr class="mypage_hr">
          <p class="minyuuryoku2">入力してね</p>
          <div class="flex_content-box">
            <div class="flex_content-item2">
                <p class="hennkou2">メールアドレス変更：</p>
            </div>
            <div class="flex_content-item2">
              <input type="email" id="email" name="email" class="textbox2">
            </div>
          </div>
          <hr class="mypage_hr">
          <p class="minyuuryoku2">入力してね</p>
          <div class="flex_content-box">
            <div class="flex_content-item2">
                <p class="hennkou2">パスワード変更：</p>
            </div>
            <div class="flex_content-item2">
              <input type="password" id="" name="" class="textbox2"><img src="images/pencil.png" class="pen">
            </div>
          </div>
          <hr class="mypage_hr">
          <p class="himitunositumonn">秘密の質問</p>
          <div class="flex_content-box">
            <div class="flex_content-item2">
                <p class="hennkou2">Q.好きな動物は？：</p>
            </div>
            <div class="flex_content-item2">
              <input type="text" id="" name="" class="textbox2"><img src="images/pencil.png" class="pen">
            </div>
          </div>
          <hr class="mypage_hr">
          <div class="flex_content-box">
            <div class="flex_content-item2">
                <p class="hennkou2">背景デザイン：</p>
            </div>
            <div class="flex_content-item2">
              <input type="color" value="#4251f5" width="100px" />
            </div>
          </div>
          <hr class="mypage_hr">
          <p class="withdrawal">退会する</p>
        </form>
          
          

        
        

        
  
      </div>
      <a href="" class="btn btn--red btn--radius btn--cubic"> <h1 class="mypage_button">保存する</h1><i class="fas fa-angle-right fa-position-right"></i></a>
    </div>

    <script src="js/test.js"></script>


    <!-- ポップアップの中身 -->

    <div class="popup" id="js-popup">
      <div class="popup-inner">
          <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
          <section class="box_item">
  
              <div class="image_wrapper"><img src="images/icon.png"  alt="" /></div>
              <p class="namaep">nekotarou</p>
              <a href="" class="btn btn--red btn--radius btn--cubic"> <h1 class = "soudanh1">電話する</h1><i class="fas fa-angle-right fa-position-right"></i></a>
          </section>
          
      </div>
      <div class="black-background" id="js-black-bg"></div>
  </div>

  <script src="js/pop-up.js"></script>







</body>
</html>
