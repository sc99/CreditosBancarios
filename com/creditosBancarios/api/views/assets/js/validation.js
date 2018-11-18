$("#email").keyup(validateEmail);
function validateEmail(){
  email = document.getElementById("email").value;
  var expressionEmail =  /^\w+[@]([a-z]+)*([.][a-z]{2,4})$/;
  ///^\w+@([a-z]+)*(.[a-z]{2,4})/
  var emailUser = expressionEmail.test(email);
  if (emailUser==false  ) {
    $("#email").attr("class","form-control is-invalid" );
    $("#email").parent().children("span").text("Debe ingresar un email").attr("class","invalid-feedback" ).show();
      return false;
  }else
  if( expressionEmail==true ) {
    $("#email").attr("class","form-control is-valid" );
    $("#email").parent().children("span").text("Es correcto").attr("class","valid-feedback" ).show();

  }
}
