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
    <div id="boxCenter" class="container">

      <header class="row">
        <div id="logo" >
        </div>

        <div id="headManager"class="col-lg-9 col-md-9 sm-8 col-xs-12 row">
          <aside class="">
            <p id="nameCostumer">Nombre de cliente</p>
            <button id="btnLogOff"class="btn btn-primary" type="button" name="button">Cerrar sesión</button>
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

      <div style="position: relative; top:50px; "class="">

        <ul class="nav nav-tabs nav-fill" style="background: white">
          <li class="nav-item">
            <a class="nav-link " href="#">Solicitud de credito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Estado de credito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Notificaciones</a>
          </li>

        </ul>

        <div id="divDataCostumer"class="col-lg-10 col-md-12 sm-12 col-xs-12">
          <!--ComboBox de tipo de credito-->
            <select multiple class="form-control">
              <option id="tarjetCredit" value="">Tarjeta de credito</option>
              <option id="mortgage" value="">Hipotecario </option>
              <option id="automolibe" value="">Automovil</option>

            </select>

            <!--Boton para seleccionar tipo de credito-->
              <button style="margin: 20px;"id="btnSelectTypeCredit"class="btn btn-primary" type="button" name="button">Aceptar</button>


                  <textarea id="statusCredit" style="height:50px;" disabled class="form-control" rows="5" id="comment"></textarea>
                  <div class="row" >
                    <button type="button" style="border:20px; margin:20px;" class="btn btn-primary">Reconsideracion</button>
                    <button type="button" style="border:20px; margin:20px;" class="btn btn-primary">Renovacion</button>
                    <button type="button" style="border:20px; margin:20px;" class="btn btn-primary">Cancelacion</button>
                  </div>




        </div>





      </div>


    </div>
  </body>
</html>
