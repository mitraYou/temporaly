var array

var users_id = "1"

var questions_id = []
var choice = []

//初期質問
var Question = document.getElementById("question")
var bar = document.getElementById("value")
var backButton = document.getElementById("backButton")
var checkButton = document.getElementById("checkButton")
var decisionButton = document.getElementById("decisionButton")
var counter = 0


var api_url = 'http://localhost/Github/U22/temporaly/src/'

//質問の結果をINSERTする為にset_choiceにpostする
decisionButton.addEventListener("click", function () {
  choice[4] = bar.value
  let data = {
    "users_id": users_id,
    "questions_id": questions_id,
    "choice": choice
  }
  fetch(api_url+'set_choice.php', {
    method: 'post',
    header: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
  })
})

//質問文と質問IDを取得するためにget_questionsにgetする
fetch(api_url+'get_questions.php', {
  method: 'get',
  header: { 'Content-Type': 'application/json' }
}).then(res => res.json())
  .then((json) => {
    array = json
    for (let i = 0; i < 5; i++) {
      questions_id[i] = json[i]["id"]
    }
    Question.innerHTML = array[0][1]
  })

//nextクリック
checkButton.addEventListener("click", function () {
  if (counter == 3) {
    checkButton.classList.add("hide")
    decisionButton.classList.remove("hide")
  }
  choice[counter] = bar.value
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
  bar.value = (choice[counter])
  Question.innerHTML = (array[counter][1])
  kazu.innerHTML = counter
})
