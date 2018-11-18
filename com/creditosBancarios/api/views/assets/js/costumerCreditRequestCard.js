
//aun no esta
$("#userLogin").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.
    submitUser();
});
function submitUser(){
    //console.log("ejecutado");
    var userData = $("userLogin").serialize(); //toma los datos "name" y los lleva a un arreglo.
    console.log(userData);

    $.ajax({
        type: "post",
        url:"../../../../com/creditosBancarios/api/controllers/UserController.php",
        data: userData,
        success: function(text){
            if(text=="exito"){
                succesData();

            }else{
                phperror();
            }
        }
    })
    function succesData(){
}
    $("#messageSucces").removeClass("d-none");


}
function phperror(texto){
    $("#messageError").removeClass("d-none");
  //  $("#mensajeError").html(texto);
}
