<?php
  require_once("#");
  //controllers.custumer
  $custumerCreditModel= new CreditModel();
  $matrizCreditModel=$custumerCreditModel->creditModel(id: int, type:CreditTypes, amount: CardAmounts | int, term: CreditTerm, rate: CreditRate);
  return= $matrizCreditModel;

  require_once("#");
  $userController= new UserModel();
  $user=$userController->UserModel();
  $getterDatos=$userController->getData(name:String, number:int, street:String,telephone:int, email:String);
  return= $getterDatos;

  require_once("#");
  $customerRef= new CustomerRefModel();
  $customerRefModel=$customerRef->CustomerRefModel();
  $getCustomerReference=$customerRef=getReference(name:String,telephone:int,timeMeeting:int);
  return= $getReference

  require_once("#");
  $customer= new CustomerModel();
  $custumerModel=$custumer->CustumerModel();
  $getCustumer=$custumer->getReferences(referenceList:ArrayList<CustomerRefModel>);

  return= $getCustomer;

  require_once("customerCreditRequestCreditCard.html");

 ?>
