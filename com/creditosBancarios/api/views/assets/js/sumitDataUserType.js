//Envio de email y password del cliente
$("#userLogin").submit(function(event) {
	event.preventDefault();

	email = $("#email").val();
	password = $("#password").val();
	dataUser = {"email": email,
	 				"password":password};
	console.log(dataUser);

	$.ajax({
		url: "../../../../com/creditosBancarios/api/controllers/UserController.php",
		type: "POST",
		data: dataUser,
		dataType: "json"
	}).done(function(answer){

		}
	);
});
