const form  = document.getElementById('registerform');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmedpassword = document.getElementById('confirmedpassword');
const usernameError = document.querySelector('#username + span.error');
const emailError = document.querySelector('#email + span.error');
const passwordError = document.querySelector('#password + span.error');
const confirmedpasswordError = document.querySelector('#confirmedpassword + span.error');


username.addEventListener('input', function (event) {
  if (username.validity.valid) {
    usernameError.textContent = '';
    usernameError.className = 'error';
  } else {
    showErrorForUsername();
  }

});

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

confirmedpassword.addEventListener('input', function (event){
  if(confirmedpassword.validity.valid) {
    confirmedpasswordError.textContent = '';
    confirmedpasswordError.className = 'error';
  } else {
    showErrorForConfirmedPassword();
  }

});

form.addEventListener('submit', function (event) {
  if(!username.validity.valid) {
    showErrorForUsername();
    event.preventDefault();
  }
  else if(!email.validity.valid) {
    showErrorForEmail();
    event.preventDefault();
  }
  else if(!password.validity.valid) {
    showErrorForPassword();
    event.preventDefault();
  }
  else if(!confirmedpassword.validity.valid) {
    showErrorForConfirmedPassword();
    event.preventDefault();
  }

});

function showErrorForUsername() {
  if(username.validity.valueMissing) {
    usernameError.textContent = 'Username field cant be empty!';
  } else if (username.validity.tooShort) {
    usernameError.textContent = 'Username input is too short!';
  }
  usernameError.className = 'error active';
}

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

function showErrorForConfirmedPassword () {
  if(confirmedpassword.validity.valueMissing) {
    confirmedpasswordError.textContent = 'Password confirmation cant be empty!';
  } else if (confirmedpassword.validity.tooShort) {
    confirmedpasswordError.textContent = 'Confirmed password input is too short!';
  }
  confirmedpasswordError.className = 'error active';
}