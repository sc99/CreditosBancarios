<?php

  require_once(_DIR_.'/../../util/entities/EntityCustomer.php');

  class CustomerController{

    public $request;

    function __construct($request){
      $this->request = $request;
    }

    public function requestCredit(){
      //Instanciacion.2
      $customer=new EntityCustomer();
      $credit = $this->request["credit"];
      $response = json_encode($customer->addCredit($credit));
      echo $response;
    }

    public function requestReconsideration(){
      $customer=new EntityCustomer();
      $creditId = $this->request["creditId"];
      $response = json_encode($customer->reconsiderateCredit($creditId));
      echo $response;
    }

    public function requestRenovation(){
      $customer=new EntityCustomer();
      $creditId = $this->request["creditId"];
      $response = json_encode($customer->renovateCredit($creditId));
      echo $response;
    }

    public function requestCancellation(){
      $customer=new EntityCustomer();
      $creditId = $this->request["creditId"];
      $response = json_encode($customer->cancelCredit($creditId));
      echo $response;
    }




    $request_type = $_POST["action"];
    $controller = new CustomerController($_POST); //Guardamos el request recibido
    switch($request_type){

      case "addCredit":
        $controller->requestCredit(); //Llamamos al método correspondiente
        break;
      case "reconsideration":
        $controller->requestReconsideration();
        break;
      case "renovation":
        $controller->requestRenovation();
        break;
      case "cancellation":
        $controller->requestCancellation();
        break;
      default:
        echo "Servicio no disponible";
    }



  }

 ?>
