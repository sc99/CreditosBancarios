//Envio de email y password del cliente

function logUser(){

	email = $("#email").val();
	password = $("#password").val();
	dataUser = {"action":"signIn","email": email,"password":password};
	console.log(dataUser);

	$.post(
		'../controllers/UserController.php',
		dataUser,
		function(response){
			response = $.parseJSON(response);
			if(response.result == 1){
				window.location.href = response.view;
			}else{
				alert(response.message);
			}
		}
	);
}
