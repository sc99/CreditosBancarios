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
    <div id="boxCenter2" class="container">

      <header class="row">
        <div id="logo" >
        </div>

        <div id="login"class="col-lg-9 col-md-9 sm-8 col-xs-12 row">
          <aside class="">
            <p id="nameDictaminator">Nombre de dictaminador</p>
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





        <div id="divDataCostumer"class="col-lg-10 col-md-12 sm-12 col-xs-12">
          <div class="col-lg-5 col-md-6 sm-3 col-xs-4 border border-light" >
            <p id="keyRequest">Clave unica de solicitud</p>
          </div>
          <p>Datos del solicitante</p>

          <table class="">
              <tr  class="">
                <th  >Nombre</th>
                <td>Mark</td>
              </tr>
              <tr>
                <th>Domicilio</th>
                <td>Jacob</td>
              </tr>
              <tr>
                <th scope="row">RFC</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">CURP</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Numero telefonico</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Correo</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Empresa en la que trabaja</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Puesto</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Sueldo Mensual</th>
                <td>Larry</td>
              </tr>
          </table>
        </div>

        <div id="divReferences"class="col-lg-10 col-md-12 sm-12 col-xs-12">
          <p>Referencias</p>

          <table id="table" class="">
              <tr>
                <th scope="row">Nombre</th>
                <td>Mark</td>
              </tr>
              <tr>
                <th scope="row">Numero telefonico</th>
                <td>Jacob</td>
              </tr>
              <tr>
                <th scope="row">Años de conocer al solicitante</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Empresa en la que trabaja</th>
                <td>Larry</td>
              </tr>
              <tr>
                <th scope="row">Numero telefonico</th>
                <td>Larry</td>
              </tr>

          </table>
        </div>

        <div id="divComment" class="col-lg-10 col-md-12 sm-12 col-xs-12">
          <p>Observaciones</p>
          <textarea  class="form-control" rows="5" id="comment"></textarea>
          <p>Tipo de credito</p>
          <textarea id="typeCredit" style="height:30px;" disabled class="form-control" rows="5" id="comment"></textarea>
          <p>Estatus de buro de credito</p>
          <textarea id="bureauStatus" style="height:30px;" disabled class="form-control" rows="5" id="comment"></textarea>
            <button id="btnSubmitRequest"class="btn btn-primary" type="button" name="button">Enviar</button>
        </div>

    </div>
  </body>
</html>
