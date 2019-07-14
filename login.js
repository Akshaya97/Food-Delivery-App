function validateForm() {
  if(document.loginform.username.value == "") {
    alert("Please enter your name!");
    document.loginform.username.focus();
    return false;
  }
  if(document.loginform.password.value == "") {
    alert("Please enter password!");
    document.loginform.password.focus();
    return false;
  }

  return true;
}