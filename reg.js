document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("myModal");

    var span = document.getElementsByClassName("close")[0];

    var myForm = document.getElementById("form");

    myForm.addEventListener('submit', function (event) {
        event.preventDefault();
        document.getElementById("modalText").innerHTML = "Нам очень жаль :-(. <b>В данный момент регистрация невозможна</b>.\
        <br><br>Попробуйте зарегистрироваться позже";
        modal.style.display = "block";
    })

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
})