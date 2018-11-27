
/*
  Se encarga del despliegue y el procesamiento de los datos
  que se reciben del servidor para poder mostrar las
  solicitudes pendientes
*/
function renderPendingRequests(){
  var html = "";
  $.post(
    '../../api/controllers/EmployeeController.php',
    {action:"pendingRequests",id:5},
    function(response){
      response = $.parseJSON(response);
      if(response.result = 1){
        html = processPendingRequests(response.Requests);
        $("body").ready(
          $("#requestsTable").append(html)
        );
      }else
        alert(response.message);
    }
  );
}

/*
  Se encarga del procesamiento del json que contiene las request pendientes
  para poder pasarlo a html
*/
function processPendingRequests(requests){
  var request = null;
  var html = "<tbody>";
  var credit = null;
  var customer = null;
    $.each(requests,function(index,value){
        request = value;
        credit = request.credit;
        customer = request.customer;
        html += "<tr data-request="+request.id+">";
        html +="<td>"+customer.fullname+"</td>";
        html +="<td>"+credit.creditKind+"</td>";
        html +="<td>"+credit.amount+"</td>";
        html +="<td>"+credit.fixedAmount+"</td>";
        html +="<td>"+credit.term+"</td>";
        html +="<td>"+credit.rate+"</td>";
        html +="</tr>";
    });
  return html+="</tbody>";
}
