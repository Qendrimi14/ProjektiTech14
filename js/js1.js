const regExL = {
  emailValidation: /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/,
  passwordValidation: /^[A-Z][A-z]*\d{3}$/,
};

function validateL() {
  var emailValue = document.getElementById("emailL").value;
  var passwordValue = document.getElementById("passwordL").value;

  
  if (!regExL.emailValidation.test(emailValue)) {
    alert("Please enter a valid email");
  }
  if (!regExL.passwordValidation.test(passwordValue)) {
    alert("Please enter a valid password");
  }
}