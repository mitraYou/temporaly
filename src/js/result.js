
var api_url = 'http://localhost/temporaly/src/'


var users_id = "1"

let data = {
    "users_id": users_id,
}

var result = document.getElementById('result')
var totalling

//質問の結果を取得する為にset_choiceにpostする
fetch(api_url + 'totalling_api.php', {
    method: 'post',
    header: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
}).then(res => res.json())
	.then((json) => {
	totalling = json[0]
	if(totalling <= 4){
	  res = '危険'
	}else if(totalling <= 8){
	  res = '危険気味'
	}else if(totalling <= 12){
	  res = '気分転換をしよう'
	}else if(totalling <= 16){
	  res = '大丈夫'
	}else {
	  res = '元気！'
	}
	result.innerHTML = res
  })

