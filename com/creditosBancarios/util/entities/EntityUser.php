<?php
  class EntityUser{
    //declaro atributos
    public $user;
    public $db;
    public $request;
    //constructor
    function __construct($request=request){
      $this->user=new UserModel();
      $this->db=new Database();
    }

      //Metodos
      public function EntityUser(request:Array){

      }
      public function addUSer(){

      }
      public function updateUser(){

      }
      public function deleteUser(){

      }
      public function getUser(){

      }
      public function logUser(){
        $jsonUser=jspon_encode($_REQUEST['user']);
        $jsonResult=0;

        $result=$db->query('call sp_log_in(jsonUser.email,jsonUser.pswd)')
                //result
        if ($result.row('result') == 1) {
          //si result es igual a 1 tdo bien
          if($result.row('user_type') !null)
          {
            //Se logeo un empleado
            //Usar clase UserModel
            $user->setNombre();
            $jsonResult = parse_JSON($user);
            $jsonResult["result"] = 1;
            $jsonResult["message"] = $result.row('message');
          }else {
            // se logeo un cliente
            CustomerModel $customer = new CustomerModel();
            $customer->setAtributo();
          }

        }else{
          //si es cero entonces
          //regresar result y message
          return $jsonResult;
        }
      }
      public function isValidUser(){

      }
  }
 ?>
