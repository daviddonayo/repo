@extends('layouts.layouts_admin')
@section('content')

<!-- ************************************navbar de la tabla PARA PC************************************** -->
  <nav class="card bg-light mt-3 d-none d-md-block navbar navbar-light bg-light barra">
    <div class="container-fluid d-flex"><!-- d-flex: los div se crean uno al lado del otro -->
      <form class="form-inline">


          <input class="form-control mr-sm-2 barraNOMBREAPELLIDO" type="search" placeholder="Nombre/Apellido" aria-label="Search">


          <button class="btn btn-outline-success" type="submit">Buscar</button>


          <button type="button" class="form-control mr-sm-2 ml-3">Agregar empleado</button>


            <input class="form-control mr-sm-2" type="text" placeholder="DNI">


          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>



        </form>
    </div>
  </nav>

    <!-- ********TABLA PARA VER POR COMPUTADORA *********************************-->
              <div class="card bg-light mt-3 d-none d-md-block w-100 ">
                <!-- cotainer para la tabla -->
                <div class="container-fluid">
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- fin container-->


<!-- ************************************navbar de la tabla PARA CELULAR************************************** -->
<nav class="navbar bg-light mt-3 d-sm-none navbar-dark bg-light">
    <div class="container-fluid">

          <input class="form-control mr-sm-2" type="search" placeholder="Nombre/Apellido" aria-label="Search" id="inputNombre">


          <input class="form-control mr-sm-2" type="search" placeholder="Dni" aria-label="Search" id="inputDni">

          <button type="button" class="btn btn-primary btn-lg btn-block mt-2">Agregar empleado</button>









    </div>
</nav>

<!--TABLA PARA VER POR CELULAR***********************************************-->
          <div class="card bg-light mt-3 d-sm-none   w-100 ">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>true
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!--*************************************FINAL CONTENIDO*************************************-->


@endsection


@section('scripts')
  <script>
    $(document).keypress(function(e){
      if (e.which == 13) {

        var inputDni = $("#inputDni").val();
        var inputNombre = $("#inputNombre").val();
        var buscar;
        if (inputDni == "") {
          buscar = inputNombre;
        }
        else if (inputNombre == "") {
          buscar = inputDni;
        }
        else {
          buscar = inputDni;
        }

        window.location.href="/vista/"+buscar;


      }
    });
  </script>

@endsection
