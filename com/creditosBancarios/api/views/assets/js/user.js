$("#userLogin").submit(function(event){
  event.preventDefault();
  successData();
});
function successData(){
  console.log();
  var userData = $("#userLogin").serialize(); //almacena los datos sin refrescar el sitio web.
  console.log(userData);
  $.ajax({
    type: "post",
    url:"../../../../com/creditosBancarios/api/controllers/UserController.php",
    data: userData,
    success: function(text) {
      if (text== "success") {
        correct();
      }else {
        error();
      }
    }

  })

}


function correct(){
    $("#messageSucces").removeClass("d-none");

}

function error(){
    $("#messageError").removeClass("d-none");

}
