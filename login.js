document.addEventListener('DOMContentLoaded', function () {
var modal = document.getElementById("myModal");

var span = document.getElementsByClassName("close")[0];

var myForm = document.getElementById("form");

// Вставка текста в модальное окно
myForm.addEventListener('submit', function (event) {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    event.preventDefault();
    document.getElementById("modalText").innerHTML = "Пользователь с email: <span class=\"emailUser\">" + email + "</span>\
    не зарегистрирован.<br><br>Пожалуйста, <a href=\"reg.php\">зарегистрируйтесь</a>";
    modal.style.display = "block";
})

// Закрытие модального окна при нажатии на крестик
span.onclick = function () {
    modal.style.display = "none";
}

// Закрытие модального окна по щелчку в любом месте модельного окна
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
})