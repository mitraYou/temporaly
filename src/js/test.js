var array

var users_id = "1"

var question_id = []
var answers = []

//初期質問
var Question = document.getElementById("question")
var bar = document.getElementById("value")
var backButton = document.getElementById("backButton")
var checkButton = document.getElementById("checkButton")
var decisionButton = document.getElementById("decisionButton")
var counter = 0


//質問の結果をINSERTする為にset_answersにpostする
decisionButton.addEventListener("click", function () {
  let data = {
    "users_id": users_id,
    "question_id": question_id,
    "answers": answers
  }
  fetch('http://localhost/temporaly-main/src/set_answers.php', {
    method: 'post',
    header: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
  })
})

//質問文と質問IDを取得するためにget_questionsにgetする
fetch('http://localhost/temporaly-main/src/get_questions.php', {
  method: 'get',
  header: { 'Content-Type': 'application/json' }
}).then(res => res.json())
  .then((json) => {
    console.log(json)
    array = json
    for (let i = 0; i < 5; i++) {
      question_id[i] = json[i]["id"]
    }
    Question.innerHTML = array[0][1]
  })  
  

// window.location.assign('../result.html')

//nextクリック
checkButton.addEventListener("click", function () {
  if (counter == 3) {
    checkButton.classList.add("hide")
    decisionButton.classList.remove("hide")
  }
  answers[counter] = bar.value
  counter++
  Question.innerHTML = (array[counter][1])
  kazu.innerHTML = counter
})

//backクリック
backButton.addEventListener("click", function () {
  if (counter == 4) {
    checkButton.classList.remove("hide")
    decisionButton.classList.add("hide")
  }
  counter--
  bar.value = (answers[counter])
  Question.innerHTML = (array[counter][1])
  kazu.innerHTML = counter
})
