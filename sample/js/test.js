

//仮の配列
var array1 = new Array('リンゴ', 'バナナ', 'イチゴ');
var random_first = Math.floor( Math.random() * array1.length );
console.log(random_first);

//初期質問
var Question = document.getElementById("question");
Question.innerHTML=array1[1];

//nextクリック後の質問
checkButton.addEventListener("click",function(){

  //クリックイベント内でもう一度ランドしないと更新してくれない
  var random = Math.floor( Math.random() * array1.length );
  Question.innerHTML = (array1[random]);
  console.log(value.value);
  console.log(random);

});

kazu.innerHTML =array1.length;