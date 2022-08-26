<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/reset.css" rel="stylesheet">
  <!-- <link href="css/style_Q.css" rel="stylesheet" type="text/css"> -->
  <link href="css/consultation.css" rel="stylesheet" type="text/css">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1,user-scalable=no”>
  <!-- <link href='css/style.css' rel='stylesheet' type='text/css'> -->

  <title>Document</title>
</head>

<body>
  <div class="body">
    <?php include('./components/header.php'); ?>
    <div class="top-kakoi">
      <div class="input">
        <!-- ユーザーごとに画像変える(仮の猫) -->
        <div class="input_flex2">
          <div class="input-cat">
          <img src="images/animal_0.png" class="input-cat">
        </div>
      </div>
        <div class="input_flex1">
          <div class="input_hukidasi">
            <div class="input_comment">

              <div id="question" class="input_data">

                <div id="back" class="back_input_Button hide">
                  <!-- <button type="submit" id="checkButton"> -->
                  <!-- <h1 class="questionnaire-left-yajirusi arrow"> -->
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                      <path
                        d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z" />
                    </svg>
                  </button>
                  <!-- </h1> -->
                </div>



                <div class="data">
  


                  <!-- 二番目 -->
                  <table class="table " id="table">
                    <tr class="form_check">
                      <th>*必ず入力してね</th>
                      <td></td>
                    </tr>
                    <tr class="table_tr">
                      <th>*ユーザーid <br>メールアドレス
                      </th>
                      <td><input type="text" name="data" id="data_input[0]"  value="" data-maxlength="10" required /></td>
                    </tr>
                    <tr class="table_check">
                      <th></th>
                      <td>入力してね</td>

                    </tr>
                    <tr class="table_tr">
                      <th>*パスワード</th>
                      <td><input type="password" name="data" id="data_input[1]"  value="" required /></td>
                    </tr>
                    <tr class="table_check">
                      <th></th>
                      <td>入力してね</td>
                    </tr>
                  </table>
                </div>
                <div class="touroku login" id="end">
                  <a href="" class="btn btn--radius choose_btn register_btn">
                    <h2>とうろく！</h2>
                  </a>
                </div>
              </div>

              <!-- <input type=" submit" value=""> -->

              <!-- <div class="question" id="question"></div> -->


            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- <img src="images/unknown-removebg-preview.png" class="hukidasi2"> -->


  </div>
  </div>

 <!-- validationJs -->
  <script src="js/register.js"></script>

</body>

</html>
