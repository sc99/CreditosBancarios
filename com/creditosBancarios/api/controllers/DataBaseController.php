<?php
  $db=new DataBase();

  $db->DataBase();
  $db->DataBase(user:String, pass:String, host:String, db:String);

  //ESto realmente es del controlador o ya es parte del modelo?
  //Perdon por la insistencia pero yo siempre he manejado el modelo como los archivos que hacen las consultas a la db.
  $db->conect();
  $db->disconect();
  $db->execute(query:String);

  //faltan Setters(); y Getters();
 ?>
