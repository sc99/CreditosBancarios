$("#btnSelectTermCredit").click(comboTypeCredit);


function comboTypeCredit() {
  if ($("#CREDIT").val() == ''  ) {
    console.log("Debe elegir una opcion");
    return false;
  } else {
    console.log("campo correct");
  }


}
