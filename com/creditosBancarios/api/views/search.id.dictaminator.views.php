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

      <!--ComboBox de dictaminador -->
      <div id="divTelephoneResearch" class="col-lg-10 col-md-10 sm-10 col-xs-10 ">
          <p>Dictaminador</p>



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
          <select multiple class="form-control">
            <option id="Id1Dictaminator" value="">Nombre de cliente ID1</option>
            <option id="Id2Dictaminator" value="">Nombre de cliente ID2 </option>
            <option id="Id3Dictaminator" value="">Nombre de cliente ID3 </option>
            <option id="Id4Dictaminator" value="">Nombre de cliente ID4 </option>
          </select>

          <!--Boton para seleccionar un cliente-->
            <button id="btnSelectIdDict"  class="btn btn-primary" type="button" name="button">Seleccionar</button>

      </div>


    </div>
  </body>
</html>
