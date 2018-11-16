<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-with, initial-scale=1.0">
  <link rel="stylesheet" href="../../../../com/creditosBancarios/api/views/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../com/creditosBancarios/api/views/assets/css/style.css">
  <script src="../../../../com/creditosBancarios/api/views/js/assets/jquery-3.3.1.min.js"></script>
  <script src="../../../../com/creditosBancarios/api/views/assets/js/bootstrap.min.js"></script>
  <title></title>
</head>
  <body>
    <div  class="content container">

      <header class="content__header row">
        <div class="content__header__div-img-logo col-lg-3 col-md-3 sm-4 col-xs-4 row" >
        </div>

        <div id=""class="content__header__user col-lg-9 col-md-9 sm-8 col-xs-8 row">
          <aside class="content__header__user__col">
            <label for="" class="content__header__user__col__lbl-user">Nombre de empleado</label>
            <button id="btnLogOff"class="content__header__user__col__btn btn btn-primary" type="button" name="button">Cerrar sesión</button>
          </aside>
        </div>
      </header>

      <!--ComboBox de empleado-->
      <div class="content__center-user__div-data col-lg-10 col-md-10 sm-10 col-xs-10 ">
        <select class="content__center-user__div-data__cmb-box form-control">
          <option id="telephoneResearch" value="">Investigación Telefonica</option>
          <option id="notificationCostumer" value="">Notificación para usuario</option>
          <option id="observationRequest" value="">Observación de solicitudes pendientes</option>
        </select>

        <button id="btnAcept"class="content__center-user__div-data__btn btn btn-primary" type="button" name="button">Aceptar</button>
          <!--Barra de busqueda de ID-->
        <div id="navSearchID" class="">
          <nav class="">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search"   placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
            </form>
          </nav>
        </div>


        <!--ComboBox de id de clientes-->
          <select multiple class="content__center-user__div-data__cmb-box form-control">
            <option id="Id1" value="">Nombre de cliente ID1</option>
            <option id="Id2" value="">Nombre de cliente ID2 </option>
            <option id="Id3" value="">Nombre de cliente ID3 </option>
            <option id="Id4" value="">Nombre de cliente ID4 </option>
          </select>

          <!--Boton para seleccionar un cliente-->
            <button id="btnselectIdCostumer"class="content__center-user__div-data__btn btn btn-primary" type="button" name="button">Seleccionar</button>

      </div>


    </div>
  </body>
</html>