var api_url = 'http://localhost/Github/U22/temporaly/src/'
let data = {
    "users_id": users_id,
}

//質問の結果を取得する為にset_choiceにpostする
fetch(api_url + 'totalling_api.php', {
    method: 'post',
    header: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
})

var result = document.getElementById('result')
