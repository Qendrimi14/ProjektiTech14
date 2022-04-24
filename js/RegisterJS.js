const regEx = {
    nameValidation: /^[A-Z][A-z]*/,
    surnameValidation: /^[A-Z][A-z]*/,
    usernameValidation: /^[A-Za-z0-9_\-.]{8,15}$/,
    emailValidation: /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/,
    passwordValidation: /^[A-Z][A-z]*\d{3}$/,
  };
  
  function validate() {
    var nameValue = document.getElementById("name").value;
    var surnameValue = document.getElementById("surname").value;
    var usernameValue = document.getElementById("username").value;
    var emailValue = document.getElementById("email").value;
    var passwordValue = document.getElementById("password").value;
  
    if (!regEx.nameValidation.test(nameValue)) {
      alert("Please enter a valid name");
    }
    if (!regEx.surnameValidation.test(surnameValue)) {
      alert("Please enter a valid surname");
    }
    if (!regEx.usernameValidation.test(usernameValue)) {
      alert("Please enter a valid username");
    }
  
    if (!regEx.emailValidation.test(emailValue)) {
      alert("Please enter a valid email");
    }
    if (!regEx.passwordValidation.test(passwordValue)) {
      alert("Please enter a valid password");
    }
  }