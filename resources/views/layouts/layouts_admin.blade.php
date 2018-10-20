<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--##################################################### CSS ###########################################-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/paneladmin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paneladmin2.css') }}" rel="stylesheet">
  </head>
  <body>


    <div class="container-fluid containerprincipal">
      <!--************************************************NAVBARMOVIL**********************************************-->
      <div class="row d-sm-none ">
        <div class="col-xs-12 col-sm-12">
          <div class="card cardnavcelular">

              <div class="container-fluid">
                <div class="row">

                  <div class="col-xs-10 col-sm-10">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary botonnavbamovil" data-toggle="modal" data-target="#exampleModal">
                      <i class="fas fa-align-justify icononavbarmovil"></i>
                    </button>


                  </div>

                </div>
              </div>

          </div>
        </div>
      </div>
      <!--************************************************FINAL NAVBARMOVIL**********************************************-->

      <!--************************************************NAVBAR**********************************************-->
      <div class="row d-none d-md-block primerfila">
        <nav class="navbar navbar-expand-lg navbarredsocial">


                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse navbargeneral" id="navbarSupportedContent">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-4">

                            <form class="form-inline buscador">
                              <input class="form-control inputbuscador" type="search" placeholder="Buscador" id="input_buscador">
                              <button class="btn btn-outline-primary botonsearchnavbar" type="button" onclick="cambiar_busqueda();">Buscar</button>
                            </form>

                          </div>
                          <div class="col-md-8">
                            <ul class="navbar-nav opcionesnavbar">
                              <li class="nav-item active mailnavbar">
                                <a class="nav-link" href="/casillaMensajes/admin/recibidos">
                                  <div class="container containerhome">
                                      <div class="row">

                                           <i class="fas fa-envelope iconomail"></i>

                                      </div>
                                      <div class="row">

                                           <p class="textooo">Mail</p>

                                     </div>
                                  </div>
                                </a>
                              </li>

                              <li class="nav-item active notificacionesnavbar">
                                <!-- Esto hace variar el color dependiendo si el usuario tiene noticaciones sin leer-->
                                  <a class="nav-link noticacionesColor">

                                  <div class="container containerhome">
                                      <div class="row">

                                           <i class="fas fa-bell icononotificaciones"></i>

                                      </div>
                                      <div class="row">

                                           <p class="textooo">Notificaciones</p>

                                     </div>
                                  </div>
                                </a>
                              </li>
                              <li class="nav-item active configuracionnavbar">
                                <a class="nav-link" href="/configAdmin">
                                  <i class="fas fa-cog iconoconfiguracion"></i>
                                </a>
                              </li>
                              <li class="nav-item active premiumnavbar">
                                <button type="button" class="btn btn-outline-primary premiumboton" onclick="cerrarSession();">Cerrar Session</button>

                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </div>

          </nav>
      </div>
      <!--************************************************FINAL NAVBAR**********************************************-->

      <!--************************************************CONTENIDO Y SLIDEBAR**********************************************-->
      <div class="row">
        <!--*****************************SLIDEBAR*****************************-->
        <div class="col-md-2 columnaslidebar">
          <div class="container-fluid d-none d-md-block containerslide">
                <div id="wrapper" class="toggled margen_card_bienvenido">


                    <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                      <ul class="list-group list-group-flush slidefila">
                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/admin">Admin</a>
                        </li>

                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/baseAdmin">Base de Datos</a>
                        </li>
                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/usuariosAdmin">Usuarios</a>
                        </li>
                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/foroAdmin">Inicio</a>
                        </li>
                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/listarPatrocinadores">Patrocinadores</a>
                        </li>

                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/perfilAdmin">Perfil</a>
                        </li>

                        <li class="list-group-item lislide">
                          <a class="list-group-item list-group-item-action elementoslide" href="/donacionesAdmin">Donaciones</a>
                        </li>



                      </ul>
                    </div>
                    <!-- /#sidebar-wrapper -->


                </div>
          </div>
          <!-- FIN SIDEBAR -->

        </div>
        <!--*************************************FINAL SLIDEBAR*************************************-->

        <!--*************************************CONTENIDO*************************************-->

        <div class="col-md-10">
          @yield('content')
        </div>

      <!--************************************************FINAL CONTENIDO Y SLIDEBAR**********************************************-->



      <!-- VENTANA MODAL -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content modalnavmovil">
            <div class="modal-header">
              <button type="button" class="btn btn-danger botoncerrarmodal" data-dismiss="modal">Cerrar</button>


            <button type="button" class="btn btn-outline-primary premiumboton">Cerrar Session</button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <a class="nav-link botonmovilnav" href="/casillaMensajes/admin/recibidos">
                    <div class="container containerhome">
                        <div class="row">

                             <i class="fas fa-envelope iconomailmovil"></i>

                        </div>
                        <div class="row">

                             <p class="textooo">Mail</p>

                       </div>
                    </div>
                  </a>

                  <a class="nav-link botonmovilnav noticacionesColor" href="">


                    <div class="container containerhome">
                        <div class="row">

                             <i class="fas fa-bell icononotificacionesmovil"></i>

                        </div>
                        <div class="row">

                             <p class="textooo">Notificaciones</p>

                       </div>
                    </div>
                  </a>
                  <a class="nav-link botonmovilnav" href="/configAdmin">
                    <div class="container containerhome">
                      <div class="row">
                          <i class="fas fa-cog iconoconfiguracionmovil"></i>
                      </div>
                      <div class="row">

                           <p class="textooo">Config</p>

                     </div>
                    </div>

                  </a>
                </div>
                <div class="row">
                  <a class="list-group-item list-group-item-action elementoslide" href="#">Base de Datos</a>
                </div>
                <div class="row">
                  <a class="list-group-item list-group-item-action elementoslide" href="#">Usuarios</a>
                </div>
                <div class="row">
                  <a class="list-group-item list-group-item-action elementoslide" href="#">Patrocinadores</a>
                </div>
                <div class="row">
                  <a class="list-group-item list-group-item-action elementoslide" href="#">Publicidad</a>
                </div>
              </div>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('scripts')

  </body>
</html>
