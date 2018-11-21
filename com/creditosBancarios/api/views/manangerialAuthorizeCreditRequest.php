<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-with, initial-scale=1.0">
  <link rel="stylesheet" href="../../../../com/creditosBancarios/api/views/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../com/creditosBancarios/api/views/assets/css/style.css">

  <title></title>
</head>
  <body>
    <div class="content-2 container">

      <header class="content__header row">
        <div class="content__header__div-img-logo col-lg-3 col-md-3 sm-4 col-xs-4 row" >
        </div>

        <div id=""class="content__header__user col-lg-9 col-md-9 sm-8 col-xs-8 row">
          <aside class="content__header__user__col">
            <label for="" class="content__header__user__col__lbl-user">Nombre de gerente</label>
            <button id="btnLogOff"class="content__header__user__col__btn btn btn-primary" type="button" name="button">Cerrar sesión</button>
          </aside>
        </div>
      </header>





        <div  class="content__center-user__div-data col-lg-10 col-md-12 sm-12 col-xs-12">
          <p>Aprovación de solicitud</p>
          <div id="navSearchID" class="">
            <nav class="">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search"   placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
              </form>
            </nav>
          </div>

          <p>Solicitudes</p>
          <div class="col-lg-5 col-md-6 sm-3 col-xs-4 border border-light" >
            <p id="keyRequest">Clave unica de solicitud</p>
          </div>
          <label class="content__center-user__div-data__lbl"for="">Datos del solicitante</label>

          <table id="costumer" class="">
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
          <label class="content__center-user__div-data__lbl" for="">Referencias</label>

          <table id="references" class="">
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
          <label class="content__center-user__div-data__lbl"for="">Observaciones</label>
          <textarea  id="observations"class="form-control" rows="5" id="comment"></textarea>
          <label class="content__center-user__div-data__lbl"for="">Tipo de credito</label>
          <textarea id="typeCredit" style="height:30px;" disabled class="form-control" rows="5" id="comment"></textarea>
          <label class="content__center-user__div-data__lbl"for="">Estatus de buro de credito</label>
          <textarea id="bureauStatus" style="height:30px;" disabled class="form-control" rows="5" id="comment"></textarea>
            <button id="btnSubmitRequest"class="content__center-user__div-data__btn btn btn-primary" type="button" name="button">Aprobar</button>
        </div>





    </div>
    <script src="../../../../com/creditosBancarios/api/views/assets/js/import/jquery-3.3.1.min.js"></script>
    <script src="../../../../com/creditosBancarios/api/views/assets/js/import/bootstrap.min.js"></script>
  </body>
</html>
