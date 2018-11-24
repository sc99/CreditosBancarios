$("#userLogin").submit(function(e) {
	e.preventDefault();
	/*var nombre = $("#nombre").val(),
	apellido = $("#apellido").val(),
	edad = $("#edad").val(),*/

	//"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
	datos = {"nombre": "hola", "apellido":"holaf","edad":52};

	$.ajax({
		url: "../../../../com/creditosBancarios/api/controllers/UserController.php",
		type: "POST",
		data: datos,
		dataType: "json"
	}).done(function(respuesta){
		if (respuesta.estado === "ok") {
			console.log(JSON.stringify(respuesta));
      console.log("bien");

			var nombre = respuesta.nombre,
			apellido = respuesta.apellido,
			edad = respuesta.edad;


		}
	});
});

function correct(){

    $("#messageSucces").removeClass("d-none");

}

function error(){
    $("#messageError").removeClass("d-none");

}



/*
$("#userLogin").submit(function(event){
  event.preventDefault();
  successData();
});
function successData(){
  console.log();
var userData = $("#userLogin").serialize();//almacena los datos sin refrescar el sitio web.
  email=document.getElementById("email").value;
  nombre=document.getElementById("email").value;
  $.ajax({
    type: "post",
    url:"../../../../com/creditosBancarios/api/controllers/UserController.php",
    data: {"email": email,
    "nombre":nombre },
    //dataType: "json",
    success: function(data) {
      if (data== "success") {
        correct();
      --  console.log(userData);
      }
    },
    error: function () {
      console.log("Error");
    }
  });

}


function correct(){

    $("#messageSucces").removeClass("d-none");

}

function error(){
    $("#messageError").removeClass("d-none");

}*/
