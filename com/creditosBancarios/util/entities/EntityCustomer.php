<?php

  class EntityCustomer{
    public $db;
    public $customer;

    function __construct(argument)
    {
      $this->db =new DataBase();
      $this->customer =new CustomerModel();
    }

    publci function EntityCustomer(request:Array){

    }


    public function logCustomer(){
      $jsonCustomer=jspon_encode($_REQUEST['user']);
      $jsonResult=0;

      $result=$db->query('call sp_log_in(jsonCustomer.email,jsonCustomer.pswd)')
              //result
      if ($result.row('result') == 1) {
        //si result es igual a 1 tdo bien
        if($result.row('user_type') !null)
        {
          //Se logeo un cliente
          //Usar clase UserModel
          $customer->setNombre();
          $jsonResult = parse_JSON($customer);
          $jsonResult=  array("result"=>$result["result"],"message"=>$result["message"]);
        }else {
          // se logeo un empleado
          CustomerModel $user = new UserModel();
          $user->setAtributo();
        }

      }else{
        //si es cero entonces
        //regresar result y message
        return $jsonResult;
      }
    }


    public function addCredit($credit){
      $resultArray;
      try{
        $this->db->connect();
        $query = "call sp_addCredit(".$credit.")";
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


    public function renovateCredit($creditId){
      $resultArray;
      try{
        $this->db->connect();
        $query = "call sp_renovateCredit(".$creditId.")";
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

    public function reconsiderateCredit($creditId){
      $resultArray;
      try{
        $this->db->connect();
        $query = "call sp_reconsiderateCredit(".$creditId.")";
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

    public function cancelCredit($creditId){
      $resultArray;
      try{
        $this->db->connect();
        $query = "call sp_cancelCredit(".$creditId.")";
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
  }

?>
