const form  = document.getElementById('loginform');
const email = document.getElementById('email');
const password = document.getElementById('password');
const emailError = document.querySelector('#email + span.error');
const passwordError = document.querySelector('#password + span.error');


email.addEventListener('input', function (event){
  if(email.validity.valid) {
    emailError.textContent = '';
    emailError.className = 'error';
  } else {
    showErrorForEmail();
  }

});

password.addEventListener('input', function (event){
  if(password.validity.valid) {
    passwordError.textContent = '';
    passwordError.className = 'error';
  } else {
    showErrorForPassword();
  }

});

form.addEventListener('submit', function (event) {
  
  if(!email.validity.valid) {
    showErrorForEmail();
    event.preventDefault();
  }
  else if(!password.validity.valid) {
    showErrorForPassword();
    event.preventDefault();
  }
  
});

function showErrorForEmail () {
  if(email.validity.valueMissing) {
    emailError.textContent = 'Email field cant be empty!';
  } else if (email.validity.tooShort) {
    emailError.textContent = 'Email input is too short!'; 
  }
  emailError.className = 'error active';
}

function showErrorForPassword () {
  if(password.validity.valueMissing) {
    passwordError.textContent = 'Password field cant be empty!';
  } else if (password.validity.tooShort) {
    passwordError.textContent = 'Password input is too short!'; 
  }
  passwordError.className = 'error active';
}
