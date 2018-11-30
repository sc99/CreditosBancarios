

function validate() {
  if (validateEmail()== false || validatePassword()== false) {
    console.log("Estan mal los campos");
    $("#messageError").removeClass("d-none");
    return false;
  }else {
    console.log("Estan bien los campos");
    $("#messageError").addClass("d-none");
    $("#messageSucces").removeClass("d-none");
    logUser();
  }
}
function validateEmail() {
  email=document.getElementById("email").value;
  var expressionEmail =  /^\w+([.]\w+)?([@][a-z]+)*([.][a-z]{2,8}|[.][a-z]{2,10}[.][a-z]{2,8})$/;
  var emailUser = expressionEmail.test(email);

  if (emailUser==false) {

    console.log("Esta mal");
    $("#email").attr("class","form-control is-invalid" );
    $("#email").parent().children("span").text("Debe ingresar un email").attr("class","invalid-feedback" ).show();

    return false;
  }else if (emailUser==true) {

    console.log("Esta bien");
    $("#email").attr("class","form-control is-valid" );
    $("#email").parent().children("span").text("Es correcto").attr("class","valid-feedback" ).show();
  }
}

function validatePassword() {
  password = document.getElementById("password").value;
  var expressionPassword =  /^(\w+){2,20}$/;
  var passwordUser = expressionPassword.test(password);

  if (passwordUser==false) {

    console.log("Esta maaaal");
    $("#password").attr("class","form-control is-invalid" );
    $("#password").parent().children("span").text("Debe ingresar un password").attr("class","invalid-feedback" ).show();
    console.log(password);
    return false;
  }else if (passwordUser==true) {

    console.log("Esta bien");
    $("#password").attr("class","form-control is-valid" );
    $("#password").parent().children("span").text("Es correcto").attr("class","valid-feedback" ).show();
  }
}
