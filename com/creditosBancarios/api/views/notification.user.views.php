<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../com/creditosBancarios/util/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../com/creditosBancarios/util/assets/css/style.css">
    <script src="../../../../com/creditosBancarios/util/assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../../../com/creditosBancarios/util/assets/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <div  id="boxCenter" class="container">

      <header class="row">
        <div id="logo" >
        </div>

        <div id="headManager"class="col-lg-9 col-md-9 sm-8 col-xs-12 row">
          <aside class="">
            <p id="nameManager">Nombre de empleado</p>
            <button id="logOff"class="btn btn-primary" type="button" name="button">Cerrar sesión</button>
          </aside>

          <aside class="">
            <div class="pos-f-t">
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                  <h4 class="text-white">Collapsed content</h4>
                  <span class="text-muted">Toggleable via the navbar brand.</span>
                </div>
              </div>
              <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarToggleExternalContent"   aria-controls="navbarToggleExternalContent" aria-expanded="false"   aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>
            </div>
          </aside>

        </div>
      </header>

      <!--ComboBox de empleado-->
      <div id="divTelephoneResearch" class="col-lg-10 col-md-10 sm-10 col-xs-10 ">
        <select class="form-control">
          <option id="telephoneResearch" value="">Investigación Telefonica</option>
          <option id="notificationCostumer" value="">Notificación para usuario</option>
          <option id="observationRequest" value="">Observación de solicitudes pendientes</option>
        </select>

        <button id="btnAcept"class="btn btn-primary" type="button" name="button">Aceptar</button>



        <!--ComboBox de id de clientes-->
        <div id="divNotificationId"class="">
          <form  >
            <div  class="checkbox">
              <label><input type="checkbox"   value="">Option 1</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox"   value="">Option 2</label>
            </div>
            <div class="checkbox ">
              <label><input type="checkbox" value=""  >Option 3</label>
            </div>
            <div class="checkbox ">
              <label><input type="checkbox" value=""  >Option 4</label>
            </div>
            <div class="checkbox ">
              <label><input type="checkbox" value=""  >Option 5</label>
            </div>
            <div class="checkbox ">
              <label><input type="checkbox" value=""  >Option 4</label>
            </div>
            <div class="checkbox ">
              <label><input type="checkbox" value=""  >Option 5</label>
            </div>
          </form>
        </div>


          <!--Boton para seleccionar un cliente-->
            <button id="btnSubmitNotification"class="btn btn-primary" type="button" name="button">Enviar notificación</button>

      </div>


    </div>
  </body>
</html>
