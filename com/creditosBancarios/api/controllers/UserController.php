<?php
  require_once(_DIR_.'/../../util/entities/EntityUser.php');

  /**
   *
   */
  class UserController
  {
    public $request;

//tambien falta isvalidUser

    function __construct($request)
    {
      $this->request = $request;
    }

    public function modification(){
      $user=new EntityUser();
      $id = $this->request["id"];
      $response = json_encode($user->updateUser($id));
      echo $response;
    }

    public function removal(){
      $user=new EntityUser();
      $id = $this->request["id"];
      $response = json_encode($user->deleteUser($id));
      echo $response;
    }

    public function getUser(){
      $user=new EntityUser();
      $id = $this->request["id"];
      $response = json_encode($user->getUser($id));
      echo $response;
    }

    public function signIn(){
      $mail = $this->request["email"];
      $pswd = md5($this->request["pswd"]);
      $user=new EntityUser();
      $response = json_encode();
    }

    public function signOut(){
      $user=new EntityUser();
    }

    public function registration(){
      $user=new EntityUser();

    }

    $request_type = $_POST["action"];
    $controller = new UserController($_POST); //Guardamos el request recibido
    switch($request_type){

      case "addUser":
        $controller->registration(); //Llamamos al método correspondiente
        break;
      case "updateUser":
        $controller->modification();
        break;
      case "deleteUser":
        $controller->removal();
        break;
      case "getUser":
        $controller->getUser();
        break;
      case "signIn":
        $controller->signIn();
        break;
      case "signOut":
        break;
      //case "isValidUser":
        //$controller->requestCancellation();
        //break;
      default:
        echo "Servicio no disponible";
    }

  }

 ?>
