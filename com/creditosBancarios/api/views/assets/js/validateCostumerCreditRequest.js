$("#btnSelectTermCredit").click(comboTypeCredit);

function comboTypeCredit() {
  if ($("#DEBIT").val() == '' && $("#CREDIT").val() == '' && $("#CAR").val() == '' && $("#MORTAGE").val() == '') {
    console.log("Debe elegir una opcion");
    window.alert("Debe elegir una opcion");
    return false;
  } else {
    console.log("Estan bien");
     window.alert("Solicitud enviada");
     var url = "../../../../com/creditosBancarios/api/views/costumerViews.html"; 
     $(location).attr('href',url);
  }

}