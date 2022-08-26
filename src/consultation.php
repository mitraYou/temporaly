<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link  href="css/reset.css" rel="stylesheet">
    <link href="css/consultation.css" rel="stylesheet" type="text/css">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no”>
    
    <title>Document</title>
</head>
<body>
  <div class="body">
	<?php include('./components/header.php'); ?>
    </nav>
      <div class="kakoi">
          <h1 class="questionnaire-midasi">相談者を探す</h1>
          <h1 class="questionnaire-left-yajirusi arrow">
            <button type="button" id="backButton">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                  d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z" />
              </svg>
            </button>
          </h1>
          <div class="consultation_box">
            <div class="iconbox">
              <img src="images/icon.png" class="icon">
          </div>
                  <div class="hukidasi">
                    <div class="consultation_mycomment">
                      <p id="question">
                      </p>
                    </div>
                  </div>
          </div>

          <div class="flex_content-box">
            <div class="flex_content-item">
                <p class="content_p"><a href="#">nekotarou</a></p>
            </div>
            <!-- ポップアップ -->
            <div class="flex_content-item">
              <div id="js-show-popup">
                <img src="images/phone.png" class="flex_content-img">
              </div>  
            </div>

            <div class="flex_content-item">
              <a href="#"></a><img src="images/hukidasi.png" class="flex_content-img"></a>
            </div>
          </div>

          <hr>

          <div class="consultation_box">
            <div class="iconbox">
              <img src="images/icon.png" class="icon">
          </div>
                  <div class="hukidasi">
                    <div class="consultation_mycomment">
                      <p id="question">

                      </p>
                    </div>
                  </div>
          </div>

          <div class="flex_content-box">
            <div class="flex_content-item">
                <p class="content_p"><a href="#">nekotarou</a></p>
            </div>

            
            <!-- ポップアップ -->
            
              <div class="flex_content-item">
                <div id="js-show-popup">
                  <img src="images/phone.png" class="flex_content-img">
                </div>  
              </div>
            <div class="flex_content-item">
              <img src="images/hukidasi.png" class="flex_content-img">
            </div>
          </div>
          <hr>

                  
        <!-- </div> -->
          <!-- 矢印押すと質問内容上書き、質問は配列で送られてくるからそれをいれる -->

  
          <h1 class="questionnaire-right-yajirusi arrow" >
          
            <button type="button" id="checkButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
            </svg>
          </button>
        </h1>
  
        <!-- 現在地出したい -->
        <div id="kazu" class="kazu"></div>
      </div>

        
        

        
  
      </div>
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
