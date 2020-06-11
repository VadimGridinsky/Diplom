const form = document.querySelector('#form');
const login = document.querySelector('#login');
const nickname = document.querySelector('#nickname');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const password_confirm = document.querySelector('#password_confirm');


form.addEventListener('submit', function(evt) {
  evt.preventDefault();
  if(!login.value) {
    alert('Поле логин не заполнено');
    return;
  }
  
  if(!nickname.value) {
    alert('Поле Никнейм не заполнено');
    return;
  }
  if(!email.value) {
    alert('Поле email не заполнено');
    return;
  }
  if(!password.value) {
    alert('Поле пароль не заполнено');
    return;
  }
  if(!password_confirm.value) {
    alert('Поле подтверждение пароля не заполнено');
    return;
  }
  
  
  this.submit();
});