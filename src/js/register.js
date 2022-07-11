var description = document.getElementById('description')
var text = document.getElementById('input_text')
var back = document.getElementById('back')
var check = document.getElementById('check')
var page = document.getElementById('page')
var end = document.getElementById('end')
var table = document.getElementById('table')
var data_input = document.getElementsByName('data')

var counter = 0

var description_arr = ['なまえをつけて？','','なんて呼んだらいいかな？']
var input_arr = ["","",""]
var data_input_arr = ["","",""]


//左矢印おす
back.addEventListener('click', function () {
  //多分最後のページ行ったら
    if (counter == 2) {
        check.classList.remove('hide')
        table.classList.add('hide')
        end.classList.add('hide')
    }
    counter--
    if(counter == 1){
        //パスワードとか入れるテーブル出したい
        description.classList.add('hide')
        text.classList.add('hide')
        table.classList.remove('hide')
    }
    if (counter == 0) {
        description.classList.remove('hide')
        text.classList.remove('hide')
        back.classList.add('hide')
        table.classList.add('hide')
        for(var i = 0; i < data_input.length ; i++){
            data_input[i].value = data_input_arr[i]
        }
    }
    //テキストの値に配列に入ってる文字を入れる
    text.value = input_arr[counter]
    //入力してもらいたい文字を出す
    description.innerHTML = description_arr[counter]
    //現地
    page.innerHTML = (counter+1) + "/3"
    console.log(input_arr)
    console.log(data_input_arr)
})

//右クリックおす
check.addEventListener('click', function () {
    //テキストの値を配列に
    input_arr[counter] = text.value
    if (counter == 0) {
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
    }
    if (counter == 2) {
        description.classList.remove('hide')
        text.classList.remove('hide')
        check.classList.add('hide')
        table.classList.add('hide')
        for(var i = 0; i < data_input.length ; i++){
            data_input_arr[i] = data_input[i].value
        }
        console.log(data_input_arr)
        end.classList.remove('hide')
    }
     //テキストの値に配列に入ってる文字を入れる
    text.value = input_arr[counter]
    //入力してもらいたい文字を出す
    description.innerHTML = description_arr[counter]
    //現地
    page.innerHTML = (counter+1) + "/3"
    console.log(input_arr)
})

//登録ボタン押す
end.addEventListener('click', function () {
    //最後質問
    input_arr[2] = text.value
    //データべ＾－スに送る作業　←追加したので適宜変更願いします。
    let data = {
        "name": input_arr[0],
        "animal": input_arr[2],
        "user_id":data_input_arr[0],
        //確認のためのパスワード二回目のやつDBに送る？
        "password":data_input_arr[1]
    }
    fetch('http://localhost/test/test.php', {
        method: 'post',
        header: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
})