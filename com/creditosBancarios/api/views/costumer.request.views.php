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
    <div  class="content-2 container">

      <header class="content__header row">
        <div  class="content__header__div-img-logo col-lg-3 col-md-3 sm-4 col-xs-4 row" >
        </div>

        <div id=""class="content__header__user col-lg-9 col-md-9 sm-8 col-xs-8 ">
          <aside class="content__header__user__col">
            <label for="" class="content__header__user__col__lbl-user">Nombre de cliente</label>
            <button id="btnLogOff"class="content__header__user__col__btn btn btn-primary" type="button" name="button">Cerrar sesión</button>
          </aside>


        </div>
      </header>

      <div  class="content__center-user">

        <ul class="content__center-user__list nav nav-tabs nav-fill">
          <li class="content__center-user__list__item nav-item">
            <a class="content__center-user__list__item__hyperlink nav-link " href="#">Solicitud de credito</a>
          </li>
          <li class="content__center-user__list__item nav-item">
            <a class="content__center-user__list__item__hyperlink nav-link" href="#">Estado de credito</a>
          </li>
          <li class="content__center-user__list__item nav-item">
            <a class="content__center-user__list__item__hyperlink nav-link " href="#">Notificaciones</a>
          </li>

        </ul>

        <div id=""class="content__center-user__div-data col-lg-10 col-md-12 sm-12 col-xs-12">
          <div class="content__center-user__div-data__div-key col-lg-5 col-md-6 sm-3 col-xs-4 border border-light" >
            <p class="content__center-user__div-data-user__div-key__key" id="keyRequest">Clave unica de solicitud</p>
          </div>
          <label class="content__center-user__div-data__lbl"for="">Datos del solicitante</label>

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

          <label class="content__center-user__div-data__lbl" for="">Referencias</label>

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
          <!--ComboBox de tipo de credito-->
          <select  multiple class="content__center-user__div-data__cmb-box form-control">
            <option id="tarjetCredit" value="">Tarjeta de credito</option>
            <option id="mortgage" value="">Hipotecario </option>
            <option id="automolibe" value="">Automovil</option>
          </select>

            <!--Boton para seleccionar un cliente-->
          <button id="btnSelectTypeCredit"class="content__center-user__div-data__btn btn btn-primary"  type="button" name="button">Aceptar</button>

              <!--ComboBox de plazos de credito-->
          <select multiple class="content__center-user__div-data__cmb-box form-control">
            <option id="" value="">Plazo 1</option>
            <option id="" value="">Plazo 2</option>
            <option id="" value="">Plazo 3</option>
          </select>

                <!--Boton para seleccionar un cliente-->
          <button id="btnSelectTermCredit" class="content__center-user__div-data__btn btn btn-primary" style="margin:20px;" type="button" name="button">Aceptar</button>
        </div>
      </div>


    </div>
  </body>
</html>
