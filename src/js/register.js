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

const secretSelected = document.querySelectorAll('#secret')
const secretInput = document.getElementById('secretInput')


let counter = 0
let emptyAlertFlg = 0
let description_arr = ['なまえをつけて？','','なんて呼んだらいいかな？','秘密の質問えらんでね']
let input_arr = ["","","",""]
let data_input_arr = ["","",""]
let secret_question = ['Q好きな動物は？','Qあなたのニックネームは？','Q好きなキャラクターは？','Q好きな食べ物は？','Q思い出の場所は？']

let secret_arr = ["",""]// 秘密の質問入れる配列

if(counter === 0){
	page.innerHTML = (counter + 1) + "/4"
}

//左矢印おす
back.addEventListener('click', function () {
  //多分最後のページ行ったら
  	counter--
    if (counter == 3) {
		table.classList.add('hide')
		end.classList.add('hide')
		secret.classList.add('hide')
	}
    if (counter == 2) {
		check.classList.remove('hide')
        table.classList.add('hide')
		registerButton.classList.add('hide')
		description.innerHTML = description_arr[counter]
		catName.classList.remove('hide')
		secret.classList.add('hide')
		secretAns.classList.add('hide')



		// secret.classList.add('hide')
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
    if (counter == 0) {
		description.classList.remove('hide')
        text.classList.remove('hide')
        back.classList.add('hide')
        table.classList.add('hide')
		secret.classList.add('hide')
		registerButton.classList.add('hide')
		secret.classList.add('hide')
		secretAns.classList.add('hide')

        for(let i = 0; i < data_input.length ; i++){
			data_input[i].value = data_input_arr[i]
        }
		description.innerHTML = description_arr[counter]

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

description.innerHTML = description_arr[counter]
console.log(counter)

const checkEmpty = (inputText) => {
	if (inputText == "") {
		emptyAlertFlg = 1
		if(counter === 0){
			emptyAlert1.innerHTML = 'なまえを入力してください'
			emptyAlert1.classList.remove('hide')
		}
		if(counter === 1){
			emptyAlert2.innerHTML = '未入力の項目があります'
			emptyAlert2.classList.remove('hide')
		}

		return false
	} else {// 入力があった
		if(counter === 0){
			emptyAlert1.classList.add('hide')
		}
		if(counter === 1){
			emptyAlert2.classList.add('hide')
		}
		emptyAlertFlg = 0

		// console.log(1)
		return true
	}
}




function textCheck(textName)
{
  let name = textName
  // 文頭から文末まで全て文字かチェック
  if (name.match(/^[a-zA-Z0-9]+$/)) {
	return true
  }
}


function clickNextButton(event){

	if(!checkEmpty(catName.value || userId.value || password.value || passwordCheck.value || secretAns.value)){
		console.log(catName.value)
		return false
	}

    //テキストの値を配列に
    input_arr[counter] = text.value
    if (counter == 0) {
		emptyAlert2.classList.add('hide')
        //初めのページの左ボタン消す
        back.classList.remove('hide')
        table.classList.add('hide')

    }
    counter++
    if(counter == 1){
        //パスワードとか入れるテーブル出したい
        description.classList.add('hide')
        text.classList.add('hide')
        table.classList.remove('hide')
		secretAns.classList.add('hide')
		console.log(counter)
    }
    if (counter == 2) {
		console.log(counter)
		console.log(catName.value)
        description.classList.remove('hide')
        text.classList.remove('hide')
        // check.classList.add('hide')
		secretAns.classList.add('hide')
        table.classList.add('hide')
        for(let i = 0; i < data_input.length ; i++){
            data_input_arr[i] = data_input[i].value
        }
        console.log(data_input_arr)
    }
	if (counter == 3) {
        description.classList.remove('hide')
        text.classList.add('hide')
        check.classList.add('hide')
        table.classList.add('hide')
        end.classList.remove('hide')
		secret.classList.remove('hide')
		secretAns.classList.remove('hide')

		console.log(secretSelected)

		for(let i = 0; i < secretSelected.length ; i++){
            secret_arr[i] = secretSelected[i].value
        }
		console.log(secret_arr)
    
    }
    
    //テキストの値に配列に入ってる文字を入れる
    text.value = input_arr[counter]
    //入力してもらいたい文字を出す
    description.innerHTML = description_arr[counter]
    //現地
    page.innerHTML = (counter+1) + "/4"
    console.log(input_arr)
}

//右クリック(check)おす
check.addEventListener('click', clickNextButton)
// function QuestionClick(){
    
// }


function register(){
  //最後質問
  input_arr[1] = text.value
  secret_arr[0] = secretInput.value
  console.log(input_arr)
  //データべ＾－スに送る作業　←追加したので適宜変更願いします。
  let data = {
	  "name": input_arr[0],
	  "animal": input_arr[2],
	  "user_id":data_input_arr[0],
	  //確認のためのパスワード二回目のやつDBに送る？
	  "password":data_input_arr[1],
	  "secret_question" : secret_arr[0],
	  "secret_answer" : secret_arr[1],
  }
  console.log(data)
  console.log(JSON.stringify(data))

  console.log(JSON.stringify(data))
//   fetch('http://localhost/test/test.php', {
// 	  method: 'post',
// 	  header: { 'Content-Type': 'application/json' },
// 	  body: JSON.stringify(data)
//   })
}


//登録ボタン押す
end.addEventListener('click', register)

