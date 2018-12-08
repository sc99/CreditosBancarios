
var currentForm = null;
var isValidForm = false;
var selectedCredit = 0;

var references = {};

function logOutUser(){
  $.post(
    '../controllers/UserController.php',
    {action:"signOut"},
    function(response){
      response = $.parseJSON(response);
      if(response.success){
        window.location.href="userLogin.php";
      }
    }
  );
}

function authorizeRequest(){
  var pswd = $("#pwd").val();
  var pswdExp = /^$/;
  var request = $("div[class='jumbotron']").data("request");
  if(pswdExp.test(pswd)){
    $("#messageError").removeClass("d-none");
  }else{
    $("#messageError").addClass("d-none");
    $.post(
      '../controllers/EmployeeController.php',
      {action:"authorization",requestId:request,pswd:pswd},
      function(response){
        console.log(response);
        response = $.parseJSON(response);
        if(response.success){
          alert(response.message);
          window.location.href = "employeePendingRequest.php";
        }else{
          alert(response.message);
        }
      }
    );

  }
}

function dictaminateRequest(verdict,button){
  var requestId = $(button).parents("div[class='jumbotron']").data("request");
  $.post(
    '../controllers/EmployeeController.php',
    {action:"dictamination",request:requestId,verdict:verdict},
    function(response){
      console.log(response);
      response = $.parseJSON(response);
      if(response.success){
        alert(response.message);
        console.log("success");
        window.location.href="employeePendingRequest.php";
      }else{
        console.log(":c");
        alert(response.message);
      }
    }
  );
}

function setInvestigationResult(button){
  var firstRemark = $("#firstremark").val();
  var secondRemark = $("#secondremark").val();
  var fstRefId = $("#fstRef-Container").data("id");
  var sndRefId = $("#sndRef-Container").data("id");
  var emptyRegExp = /[a-z]+/;
  var refs = null;
  if(emptyRegExp.test(firstRemark) && emptyRegExp.test(secondRemark)){
    refs = [
      {id:fstRefId,remark:firstRemark},
      {id: sndRefId,remark:secondRemark}
    ];
    console.log(refs);
    $.post(
      '../controllers/EmployeeController.php',
      {action:"investigation",
      request:$(button).parents("div[class='jumbotron']").data("request"),
      references: refs},
      function(response){
        console.log(response);
        response = $.parseJSON(response);
        if(response.success){
          alert(response.message);
          console.log("success");
          window.location.href='employeePendingRequest.php';
        }else{
          console.log(":c")
          alert('Ocurrió un error al intentar registrar los resultados');
        }
      }
    );
  }else{
    alert('Necesitas escribir el resultado de investigación de ambas referencias');
  }

}

function processRequest(button){
  var requestId = $($(button).parents("tr")).data("request");
  $.post(
    '../controllers/EmployeeController.php',
    {action:"processRequest",request:requestId},
    function(urlRedirect){
      console.log(urlRedirect);
      window.location.href= urlRedirect;
    }
  );
}

function requestCancellation(button){
  var parentContainer = $(button).parents("div[data-request]");
  var creditId = $(parentContainer).data("request");
  $.post(
    '../controllers/CustomerController.php',
    {action:"cancellation",creditId:creditId},
    function(response){
      console.log(response);
      response = $.parseJSON(response);
      alert(response.message);
        location.reload();

    }
  );
}

function requestRenovation(){
  $.post(
    '../controllers/CustomerController.php',
    {action:"renovation"},
    function(response){
      response = $.parseJSON(response);
      alert(response.message);
        location.reload();

    }
  );
}

function requestReconsideration(){
  $.post(
    '../controllers/CustomerController.php',
    {action:"reconsideration"},
    function(response){
      console.log(response);
      response = $.parseJSON(response);
      alert(response.message);
        location.reload();

    }
  );
}

function displayForm(selection){
  var selectedItem =  selection.selectedIndex;
  switch(selectedItem){
    case 0:
    currentForm = "NONE";
    $("#debit-form").addClass("d-none");
    $("#credit-form").addClass("d-none");
    $("#mortage-form").addClass("d-none");
    $("#car-form").addClass("d-none");
    break;
    case 1: //Debito
        currentForm = "DEBIT";
      $("#debit-form").removeClass("d-none");
      $("#credit-form").addClass("d-none");
      $("#mortage-form").addClass("d-none");
      $("#car-form").addClass("d-none");
    break;
    case 2: //Credito
        currentForm = "CREDIT";
    $("#credit-form").removeClass("d-none");
    $("#debit-form").addClass("d-none");
    $("#mortage-form").addClass("d-none");
    $("#car-form").addClass("d-none");
    break;
    case 3: //Hipoteca
        currentForm = "MORTAGE";
    $("#mortage-form").removeClass("d-none");
    $("#credit-form").addClass("d-none");
    $("#debit-form").addClass("d-none");
    $("#car-form").addClass("d-none");
    break;
    case 4://Carro
        currentForm = "CAR";
    $("#car-form").removeClass("d-none");
    $("#credit-form").addClass("d-none");
    $("#debit-form").addClass("d-none");
    $("#mortage-form").addClass("d-none");
    break;
  }
}



function displayCreditForm(selection){
  var selectedItem = $(selection).val();
  var monto = null;
  var plazo = null;
  var tasa = null;
  var otros = $(selection).parent().siblings();

  $.each(otros,function(index,value){
    $(value).removeClass("d-none");
  });
    selectedItem = parseInt(selectedItem);
  isValidForm = true;
  switch(selectedItem){
    case 0:
    isValidForm = false;
     otros = $(selection).parent().siblings();
    $.each(otros,function(index,value){
      $(value).addClass("d-none");
    });
    selectedCredit = 0;
    break;
    case 4:
    monto = 10000;
    plazo = 3;
    tasa = 0;
    break;
    case 5:
    monto = 20000;
    plazo = 4;
    tasa = 0;
    break;
    case 6:
    monto = 30000;
    plazo = 5;
    tasa = 0;
    break;
  }
  if(selectedItem > 0)
    selectedCredit = selectedItem;
  $("#credit-amount").val(monto);
  $("#credit-term").val(plazo);
  $("#credit-rate").val(tasa);
}

function displayDebitForm(selection){
  var selectedItem = $(selection).val();
  var monto = null;
  var plazo = null;
  var tasa = null;
  var otros = $(selection).parent().siblings();
  isValidForm = true;
  $.each(otros,function(index,value){
    $(value).removeClass("d-none");
  });
    selectedItem = parseInt(selectedItem);
  switch(selectedItem){
    case 0:
    isValidForm = false;
     otros = $(selection).parent().siblings();
    $.each(otros,function(index,value){
      $(value).addClass("d-none");
    });

    selectedCredit = 0;
    break;
    case 1:
    monto = 10000;
    plazo = 3;
    tasa = 0;
    break;
    case 2:
    monto = 20000;
    plazo = 4;
    tasa = 0;
    break;
    case 3:
    monto = 30000;
    plazo = 5;
    tasa = 0;
    break;
  }
  if(selectedItem > 0)
    selectedCredit = selectedItem;
  $("#debit-amount").val(monto);
  $("#debit-term").val(plazo);
  $("#debit-rate").val(tasa);
}


function displayMortageForm(selection){
  var selectedItem = $(selection).val();
  var plazo = null;
  var tasa = null;
  var otros = $(selection).parent().siblings();
  isValidForm = true;
  $.each(otros,function(index,value){
    $(value).removeClass("d-none");
  });
  selectedItem = parseInt(selectedItem);

  switch(selectedItem){
    case 0:
      isValidForm = false;
     otros = $(selection).parent().siblings();
    $.each(otros,function(index,value){
      $(value).addClass("d-none");
    });
    selectedCredit = 0;
    break;
    case 7:
    plazo = 15;
    tasa = 8;
    break;
    case 8:
    plazo = 20;
    tasa = 10;
    break;
    case 9:
    plazo = 25;
    tasa = 13;
    break;
    default:
      console.log('def');
  }
  if(selectedItem > 0)
    selectedCredit = selectedItem;

  $("#mortage-term").val(plazo);
  $("#mortage-rate").val(tasa);
}

function displayCarForm(selection){
  var selectedItem = $(selection).val();
  var plazo = null;
  var tasa = null;
  var otros = $(selection).parent().siblings();
  isValidForm = true;
  $.each(otros,function(index,value){
    $(value).removeClass("d-none");
  });
    selectedItem = parseInt(selectedItem);
  switch(selectedItem){
    case 0:
      isValidForm = false;
     otros = $(selection).parent().siblings();
    $.each(otros,function(index,value){
      $(value).addClass("d-none");
    });
    selectedCredit = 0;
    break;
    case 10:
    plazo = 1;
    tasa = 5;
    break;
    case 11:
    plazo = 2;
    tasa = 6;
    break;
    case 12:
    plazo = 3;
    tasa = 7;
    break;
    case 13:
    plazo = 4;
    tasa = 8;
    break;
    case 14:
    plazo = 5;
    tasa = 9;
    break;
  }
  if(selectedItem > 0)
    selectedCredit = selectedItem;
  $("#car-term").val(plazo);
  $("#car-rate").val(tasa);
}

function addRef(){
  var refname = $("#ref-name").val();
  var fstsurname = $("#ref-pat").val();
  var sndsurname = $("#ref-mat").val();
  var phone = $("#ref-phone").val();
  var meeting = $("#ref-meeting").val();
  var firstRef = $("#firstRef").data("filled");
  var secondRef = $("#secondRef").data("filled");
  var canAdd = 0;
  var which = null;
  if(firstRef == 0){
    canAdd = 1;
    which = 0;
  }
  if(secondRef == 0){
    canAdd = 1;
    which = 1;
  }
  if(canAdd){
    var reference = {
      name:refname,
      firstSurname:fstsurname,
      secondSurname:sndsurname,
      telephone:phone,
      meet:meeting
    };
    references[which] = reference;
    fillReferenceContainer(which,reference);
    console.log(references);
  }else {
    alert('Ya agregaste a tus dos referencias');
  }
}

function fillReferenceContainer(which,object){
  var html = "";

  if(which == 0){
      $("#firstRef").data("filled",1);
  html+='<ul class="list-group">';
    html+= ' <li class="list-group-item">'+object.name+'</li>';
    html+= ' <li class="list-group-item">'+object.firstSurname+'</li>';
    html+= ' <li class="list-group-item">'+object.secondSurname+'</li>';
    html+= ' <li class="list-group-item">'+object.telephone+'</li>';
    html+= ' <li class="list-group-item">'+object.meet+'</li>';
    html +='</ul>';
    $("#firstRef").html(html);
  }else {
    $("#secondRef").data("filled",1);
    html+='<ul class="list-group">';
      html+= ' <li class="list-group-item">'+object.name+'</li>';
      html+= ' <li class="list-group-item">'+object.firstSurname+'</li>';
      html+= ' <li class="list-group-item">'+object.secondSurname+'</li>';
      html+= ' <li class="list-group-item">'+object.telephone+'</li>';
      html+= ' <li class="list-group-item">'+object.meet+'</li>';
      html +='</ul>';
      $("#secondRef").html(html);
  }
}

function requestCredit(){
  var credit = selectedCredit;
  var amount = null;
  if(credit >= 7 && credit <= 9)
    amount = $("#mortage-amount").val();
  if(credit >= 10 && credit <= 14)
    amount = $("#car-amount").val();
  if(credit != 0){
    if(Object.keys(references).length != 0){
      $.post(
        '../controllers/CustomerController.php',
        {action:"addCredit",creditId:credit,references:references,amount:amount},
        function(response){
          console.log(response);
          response = $.parseJSON(response);
          alert(response.message);
          location.reload();
        }
      );
    }else{
      alert('Necesitas agregar 2 referencias')
    }
  }else{
    alert('Asegurate de haber seleccionado un credito');
  }
}
