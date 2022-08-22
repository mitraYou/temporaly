const description = document.getElementById('description')//なまえつけて？
const text = document.getElementById('input_text')// 最初と最後 のinput
const back = document.getElementById('back')//
const check = document.getElementById('check')
const page = document.getElementById('page')
const end = document.getElementById('end')
const table = document.getElementById('table')
const registerButton = document.querySelector('.touroku')
const data_input = document.getElementsByName('data')// passwordの要素のこと
const secret = document.getElementById('secret')
const catName = document.getElementById('input_text')
const userId = document.getElementById('data_input[0]')
const password = document.getElementById('data_input[1]')
const passwordCheck = document.getElementById('data_input[2]')
const secretAns = document.querySelector('.secretClass')
const emptyAlert1 = document.getElementById('emptyAlert1')
const emptyAlert2 = document.getElementById('emptyAlert2')
const emptyAlert4 = document.getElementById('.emptyAlert4')
const secretSelected = document.querySelectorAll('#secret')//aaaaaaaaaaaaa
const secretInput = document.getElementById('secretInput')


let counter = 0
let emptyAlertFlg = 0
let description_arr = ['なまえをつけて？','','なんて呼んだらいいかな？','秘密の質問えらんでね']
let input_arr = ["","","",""]
let data_input_arr = ["","",""]
let secret_question = ['Q好きな動物は？','Qあなたのニックネームは？','Q好きなキャラクターは？','Q好きな食べ物は？','Q思い出の場所は？']
let secret_arr = ["",""]// 秘密の質問入れる配列


//最初の質問表示
description.innerHTML = description_arr[0]///////////////////////////////

//名前をつけて？のページ表示
if(counter == 0){
	page.innerHTML = (counter + 1) + "/4"
}


//左矢印（戻る）
back.addEventListener('click', function () {
    //多分最後のページ行ったら
      counter--
      if (counter == 0) {
          description.classList.remove('hide')
          text.classList.remove('hide')
          back.classList.add('hide')
          table.classList.add('hide')
          secret.classList.add('hide')
          registerButton.classList.add('hide')
          secret.classList.add('hide')
          secretAns.classList.add('hide')

          emptyAlert2.classList.add('hide')///////

          for(let i = 0; i < data_input.length ; i++){
              data_input[i].value = data_input_arr[i]
          }
          description.innerHTML = description_arr[counter]
      }
      if(counter == 1){
          //パスワードとか入れるテーブル出したい
          description.classList.add('hide')
          text.classList.add('hide')
          table.classList.remove('hide')
          secret.classList.add('hide')
          registerButton.classList.add('hide')
          secret.classList.add('hide')
          secretAns.classList.add('hide')
      }
      if (counter == 2) {
          check.classList.remove('hide')
          table.classList.add('hide')
          registerButton.classList.add('hide')
          description.innerHTML = description_arr[counter]
          catName.classList.remove('hide')
          secret.classList.add('hide')
          secretAns.classList.add('hide')
          secret.classList.add('hide')
      }
      if (counter == 3) {
          table.classList.add('hide')
          end.classList.add('hide')
          secret.classList.add('hide')
      }
      
      //テキストの値に配列に入ってる文字を入れる
      text.value = input_arr[counter]
      //入力してもらいたい文字を出す
      //現地
      page.innerHTML = (counter+1) + "/4"
      console.log(page.innerHTML)
      console.log(input_arr)
      console.log(data_input_arr)
      console.log(counter)
      
      // カウンターによってdescription_arrの要素を取得しdescriptionに反映
  })
//右矢印（進む）
check.addEventListener('click', clickNextButton)

//右矢印が押されたら
function clickNextButton(event){
    let flag = true //右矢印ボタンを押したら次のページのif分が通るから、通らないように

    if (counter == 0) {
        console.log("文字数" + (text.value).length)
        //未入力チェック＆文字数チェック
        if(text.value == ''){
            emptyAlert1.innerHTML = 'なまえを入力してください'
            emptyAlert1.classList.remove('hide')//アラートを表示するようにする
        }else if((text.value).length < 5 || (text.value).length > 15){
            emptyAlert1.innerHTML = '5文字以上15文字以内で入力してください'
            emptyAlert1.classList.remove('hide')
        }else{
            input_arr[counter] = text.value
            emptyAlert1.classList.add('hide')
            back.classList.remove('hide')//初めのページの戻るボタン消す
            table.classList.add('hide')//hideというcssを追加する
            counter++
            flag = !flag
        }
        console.log("質問１：" + flag)
        console.log("1カウンター：" + counter)
    }

    if(counter == 1){
        table.classList.remove('hide')
        description.classList.add('hide')
        text.classList.add('hide')
        secretAns.classList.add('hide')
        emptyAlert2.classList.add('hide')
        if(flag){
            if(userId.value == "" || password.value == "" || passwordCheck.value == ""){
                emptyAlert2.innerHTML = '未入力の項目があります'
                emptyAlert2.classList.remove('hide')
            }else if((userId.value).length < 5 || (userId.value).length > 10){
                emptyAlert2.innerHTML = 'idは5文字以上10文字以内で入力してください'//これアラート文idとパスワード分けたほうがわかりやすい
                emptyAlert2.classList.remove('hide')
            }else if((password.value).length < 8 || (password.value).length > 24){
                emptyAlert2.innerHTML = 'passwordは8文字以上24文字以内で入力してください'//これアラート文idとパスワード分けたほうがわかりやすい
                emptyAlert2.classList.remove('hide')
            }else if(!(password.value == passwordCheck.value)){
                emptyAlert2.innerHTML = '再入力されたパスワードが違います'//これアラート文idとパスワード分けたほうがわかりやすい
                emptyAlert2.classList.remove('hide')
            }else{
                for(let i = 0; i < data_input.length; i++){
                    data_input_arr[i] = data_input[i].value
                }
                console.log(data_input_arr)
                counter++
                flag = !flag
            }
            console.log("質問２：" + flag)
            console.log("パス１：" + password.value)
            console.log("パス２：" + passwordCheck.value)
            console.log("2カウンター：" + counter)
        }
    }

    if (counter == 2) {
        description.classList.remove('hide')
        text.classList.remove('hide')
        // check.classList.add('hide')
		secretAns.classList.add('hide')
        table.classList.add('hide')
        if(flag){
            if(text.value == ''){
                emptyAlert1.innerHTML = 'なまえを入力してください'
                emptyAlert1.classList.remove('hide')
            }else if((text.value).length < 2 || (text.value).length > 15){
                emptyAlert1.innerHTML = '2文字以上15文字以内で入力してください'
                emptyAlert1.classList.remove('hide')
            }else{
                input_arr[counter] = text.value
                emptyAlert1.classList.add('hide')
                counter++
                flag = !flag
                console.log(input_arr)
            }
            console.log("質問3：" + flag)
        }
    }

    if (counter == 3) {
        description.classList.remove('hide')
        text.classList.add('hide')
        check.classList.add('hide')
        table.classList.add('hide')
        end.classList.remove('hide')
		secret.classList.remove('hide')
		secretAns.classList.remove('hide')
        //質問の選択肢を配列に格納
        if(flag){
            for(let i = 0; i < secretSelected.length ; i++){
                secret_arr[i] = secretSelected[i].value
            }
            console.log(secret_arr)
        }
    }

    //テキストの値に配列に入ってる文字を入れる
    text.value = input_arr[counter]
    //質問内容を表示する
    description.innerHTML = description_arr[counter]
    //現地(ページネーション)
    page.innerHTML = (counter+1) + "/4"
    console.log("最後カウンター：" + counter)
}

//最後の登録ボタンが押されたら
function lastQuestionButton(){
    console.log("押されたよ！！！！！！")
    if(secretInput.value == ""){
        emptyAlert4.innerHTML = "未入力です"
        emptyAlert4.classList.remove('hide')
    }else if((secretInput.value).length < 2 || (secretInput.value).length > 15){
        emptyAlert4.innerHTML = '2文字以上15文字以内で入力してください'
        emptyAlert4.classList.remove('hide')
    }
}


//counter=1 のidの半角英数字かチェックコード
// for (let i=0; i<(userId.value).length; i++) {
//     /* 1文字ずつ文字コードをエスケープし、その長さが4文字未満なら半角 */
//     let len=escape((userId.value).charAt(i)).length;
//     if (len<4){
//     }else{
//         emptyAlert2.innerHTML = 'idは半角英数字で入力してください'
//         emptyAlert2.classList.remove('hide')
//     }
// }




// function register(){
//   //最後質問
//   input_arr[1] = text.value
//   secret_arr[0] = secretInput.value
//   console.log(input_arr)
//   //データべ＾－スに送る作業　←追加したので適宜変更願いします。
//   let data = {
// 	  "name": input_arr[0],
// 	  "animal": input_arr[2],
// 	  "user_id":data_input_arr[0],
// 	  //確認のためのパスワード二回目のやつDBに送る？
// 	  "password":data_input_arr[1],
// 	  "secret_question" : secret_arr[0],
// 	  "secret_answer" : secret_arr[1],
//   }
//   console.log(data)
//   console.log(JSON.stringify(data))

//   console.log(JSON.stringify(data))
//   fetch('http://localhost/test/test.php', {
// 	  method: 'post',
// 	  header: { 'Content-Type': 'application/json' },
// 	  body: JSON.stringify(data)
//   })
// }


// //登録ボタン押す
// end.addEventListener('click', register)