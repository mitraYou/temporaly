var description = document.getElementById('description')
var text = document.getElementById('input_text')
var back = document.getElementById('back')
var check = document.getElementById('check')
var page = document.getElementById('page')
var end = document.getElementById('end')

var counter = 0

var description_arr = ['name', 'password', 'animal']
var input_arr = ["","",""]


back.addEventListener('click', function () {
    if (counter == 2) {
        check.classList.remove('hide')
        end.classList.add('hide')
    }
    counter--
    if (counter == 0) {
        back.classList.add('hide')
    }
    text.value = input_arr[counter]
    description.innerHTML = description_arr[counter]
    page.innerHTML = (counter+1) + "/3"
    console.log(input_arr)
})

check.addEventListener('click', function () {
    input_arr[counter] = text.value
    if (counter == 0) {
        back.classList.remove('hide')
    }
    counter++
    if (counter == 2) {
        check.classList.add('hide')
        end.classList.remove('hide')
    }
    text.value = input_arr[counter]
    description.innerHTML = description_arr[counter]
    page.innerHTML = (counter+1) + "/3"
    console.log(input_arr)
})

end.addEventListener('click', function () {
    input_arr[2] = text.value
    let data = {
        "name": input_arr[0],
        "password": input_arr[1],
        "animal": input_arr[2]
    }
    fetch('http://localhost/test/test.php', {
        method: 'post',
        header: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
})