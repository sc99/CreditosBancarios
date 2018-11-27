<?php
require_once(__DIR__.'/../../util/entities/EntityEmployee.php');

class EmployeeController{

  public $request;

  function __construct($request){
    $this->request = $request;
  }

  public function dictamination(){
    $employee = new EntityEmployee();
    $requestId = $this->request["requestId"]; //Obtenemos ID de solicitud a dictaminar
    $verdict = $this->request["verdict"]; // Obtenemos veredicto del dictaminador
    $response = json_encode($employee->dictaminate($requestId,$verdict));
    echo $response;
  }

  public function creditAuthorization(){
    $employee = new EntityEmployee();
    $employeeId = $this->request["id"]; //Esto se tendría que obtener desde la variable $_SESSION
    $requestId = $this->request["requestId"];
    $pswd = md5($this->request["pswd"]);
    $response = json_encode($employee->authorizeCreditRequest($employeeId,$pswd,$requestId));
    echo $response;
  }

  public function telephonicInvestigation(){
    $employee = new EntityEmployee();
    $references = $this->request["references"]; //Array que contiene los datos de las 2 referencias del cliente
    $response = json_encode($employee->setInvestigationResult($references));
    echo $response;
  }

  public function getPendingRequests(){
    $employee = new EntityEmployee();
    $employeeId = $this->request["id"];
    $response = $employee->getAllPendingRequests($employeeId);
    echo $response;
  }

}

$request_type = $_POST["action"]; //Recibimos el tipo de acción para este controlador
//NOTA: Para este ejemplo, para mejor legibolidad,
// manejé strings pero pueden ser reemplazadas por enteros,.
$controller = new EmployeeController($_POST); //Guardamos el request recibido
switch($request_type){

  case "dictamination":
    $controller->dictamination(); //Llamamos al método correspondiente
    break;
  case "authorization":
    $controller->creditAuthorization();
    break;
  case "investigation":
    $controller->telephonicInvestigation();
    break;
  case "pendingRequests":
    $controller->getPendingRequests();
    break;
  default:
    echo "Servicio no disponible";
}

 ?>
