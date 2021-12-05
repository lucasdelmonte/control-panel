var myForm = document.getElementById('myForm');
const inputUsername = document.getElementsByName('username');
const inputPassword = document.getElementsByName('password');
var divAlert = document.getElementById('alertMessage');

myForm.addEventListener('submit', function (evt) {
  if (inputUsername[0].value == null || inputUsername[0].value == '') {
    evt.preventDefault();
    divAlert.innerHTML =
      '<div class="alert alert-danger">Incorrect account/password, please note that they are case sensitive.</div>';
  } else {
    if (inputPassword[0].value == null || inputPassword[0].value == '') {
      evt.preventDefault();
      divAlert.innerHTML =
        '<div class="alert alert-danger">Incorrect account/password, please note that they are case sensitive.</div>';
    }
  }
  console.log('Enviando formulario...');
});
