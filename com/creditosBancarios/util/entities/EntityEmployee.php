<?php
  require_once(__DIR__.'/../database/DataBase.php');
  require_once(__DIR__.'/../../api/models/CreditModel.php');
  require_once(__DIR__.'/../../api/models/CreditRequestModel.php');
  require_once(__DIR__.'/../../api/models/CustomerModel.php');
  require_once(__DIR__.'/../../api/models/CustomerRefModel.php');

class EntityEmployee{

  public $db;

  function __construct(){
    $this->db = new DataBase();
  }

  public function dictaminate($requestId,$verdict){
    $resultArray;
    try{
      $this->db->connect();
      $query = "call sp_dictaminate(".$requestId.",".$verdict.")";
      //$query = $this->db->conn->prepare($query);
      $query = $this->db->executeQuery($query);
      $resultSet = $query->fetch_array(MYSQLI_ASSOC);
      if($resultSet > 0){
        $resultArray=  array("result"=>$resultSet["result"],"message"=>$resultSet["message"]);
      }
      $query->free();
      $this->db->disconnect();

    }catch(Exception $e){
      echo $e->getMessage();
    }
    return $resultArray;

  }

  public function authorizeCreditRequest($employeeId,$pswd,$requestId){
    $resultArray;
    try{
      $this->db->connect();
      $query = "call sp_credit_authorization(".$employeeId.",'".$pswd."',".$requestId.")";
      //$query = $this->db->conn->prepare($query);
      $query = $this->db->executeQuery($query);
      $resultSet = $query->fetch_array(MYSQLI_ASSOC);
      if($resultSet > 0){
        $resultArray=  array("result"=>$resultSet["result"],"message"=>$resultSet["message"]);
      }
      $query->free();
      $this->db->disconnect();
    }catch(Exception $e){
      echo $e->getMessage();
    }
    return $resultArray;
  }

  public function setInvestigationResult($arrayReferences){
    $resultArray;
    $firstRef = $arrayReferences[0];
    $secondRef = $arrayReferences[1];
    try{
      $this->db->connect();
      $query = "call sp_set_reference_remark(".$firstRef["id"].",'".$firstRef["remark"]."')";
      //$query = $this->db->conn->prepare($query);
      $query = $this->db->executeQuery($query);
      $query = "call sp_set_reference_remark(".$secondRef["id"].",'".$secondRef["remark"]."')";
      //$query = $this->db->conn->prepare($query);
      $query = $this->db->executeQuery($query);
      $resultArray = array("result"=>1,"message"=>"Resultados de investigacion insertados");
      $this->db->disconnect();
    }catch(Exception $e){
      echo $e->getMessage();
    }
    return $resultArray;

  }

  public function getAllPendingRequests($employeeId){
    $resultArray = array();
    try{
      $this->db->connect();
      $query = "call sp_get_pending_credits(".$employeeId.")";
      $query = $this->db->executeQuery($query);
      $dataResult = array();
      while($resultSet = $query->fetch_array(MYSQLI_ASSOC)){
          $dataResult[] = $resultSet;
      }
    $query->free();
    $this->db->disconnect();
        if($dataResult[0]["result"] == 1){
        foreach ($dataResult as $resultSet=>$row) {
          $creditRequestModel = new CreditRequestModel();
          $referencesList = $this->processReferences($row);
          $credit = $this->processCredit($row);
          $customer = $this->processCustomer($row,$referencesList);

          $creditRequestModel->setId($row["id"]);
          $creditRequestModel->setStatus($row["state"]);
          $creditRequestModel->setCredit($credit);
          $creditRequestModel->setApplicant($customer);

          //Falta implementar los json_encode en las clases model para que este método funcione
          array_push($resultArray,get_object_vars($creditRequestModel));

        }
      }
      $resultArray = array("Requests"=>$resultArray,"result"=>$resultSet["result"],"message"=>$resultSet["message"]);
    }catch(Exception $e){
      echo $e->getMessage();
    }
    return $resultArray;
  }

  private function processReferences($resultSet){
    $this->db->connect();
    $query = "call sp_get_customer_references(".$resultSet["customer_id"].")";
    $query = $this->db->executeQuery($query);
    $referencesList = array();
  /*  if(!$query){
      die("error".mysqli_error($this->db->conn));
    }*/
    while($references = $query->fetch_array(MYSQLI_ASSOC)){
      $customerReference = new CustomerRefModel();
      $customerReference->setName($references["name"]);
      $customerReference->setFirstSurname($references["first_surname"]);
      $customerReference->setSecondSurname($references["second_surname"]);
      $customerReference->setTelephone($references["telephone"]);
      $customerReference->setTimeMeeting($references["timeMeeting"]);
      $customerReference->setRemark($references["remark"]);
      array_push($referencesList,$customerReference);
      $query->free();
    }
    $this->db->disconnect();
    return $referencesList;
  }

  private function processCustomer($resultSet,$referencesList){
    $customerModel = new CustomerModel();
    $customerModel->setId($resultSet["customer_id"]);
    $customerModel->setFullname($resultSet["customer"]);
    $customerModel->setEmail($resultSet["mail"]);
    $customerModel->setStreet($resultSet["street"]);
    $customerModel->setHouseNumber($resultSet["house_number"]);
    $customerModel->setTelephone($resultSet["telephone"]);
    $customerModel->setRfc($resultSet["rfc"]);
    $customerModel->setCurp($resultSet["curp"]);
    $customerModel->setJob($resultSet["job"]);
    $customerModel->setCompany($resultSet["company"]);
    $customerModel->setSalary($resultSet["salary"]);
    $customerModel->setReferencesList($referencesList);
    return $customerModel;
  }

  private function processCredit($resultSet){
    $creditModel = new CreditModel();
    $creditModel->setTerm($resultSet["term"]);
    $creditModel->setCreditKind($resultSet["credit_name"]);
    $creditModel->setRate($resultSet["rate"]);
    $creditModel->setFixedAmount($resultSet["fixed_amount"]);
    $creditModel->setAmount($resultSet["amount"]);
    return $creditModel;
  }

}


?>
