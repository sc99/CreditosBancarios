$("#btnselectIdCostumer").click(investigation);
function investigation() {
  if ($("#costumerInvestigation").val() == '' ) {
    console.log("Debe elegir una opcion");
    window.alert("Debe elegir una opcion");
    return false;
  } else {

    console.log("Estan bien");
     window.alert("Solicitud enviada");
     var url = "../../../../com/creditosBancarios/api/views/employeeTelephonicInvestigation.html";
     $(location).attr('href',url);
  }
}
