{include file="head.tpl" }
<body >
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
              <a class="navbar-brand" href="#SOBRE_ESTA_APLICACION">Sobre esta aplicacion2</a>
               <a class="navbar-brand" href="http://www.laprida.gob.ar/" > Enlace Pagina Municipal</a>


        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li> <a href="#" title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Registratse">Registratse</a></li>
            <li><a href="#"   data-toggle="modal" data-target="#Ingresar" title="Click para ingresar.Debe haberse registrado previamente">Ingresar</a></li>
          </ul>
          <form class="navbar-form navbar-right">
          </form>
        </div>
      </div>
    </div>

         <header>

            <div class="container">
            <div class="row  " >
                <div class="col-lg-12">
                 </div>

            <div class="col-lg-5 text-left">
                    <img class="img-responsive" src="imagenes/trabajador.png" alt="">
            </div>
  
                    <div class="intro-text text-left"   id="portfolio2">
                        <span class="name">Error, no ha iniciado sesion </span>
                        <hr class="star-light">
                        <span class="skills">Debe iniciar sesion para ver su reclamo.</span>
                    </div>
                     <div class="col-lg-12">
                 </div>
                                      <div class="col-lg-12">
                 </div>
                </div>
            </div>
        </div>





    </header>



 <div class="container" id="Como solucionar el problema">
            <div class="row">
                <div class="col-lg-11 text-center">
                    <h2>SOBRE ESTA APLICACION</h2>
                    <hr class="star-primary">
                </div>
            </div>


            <div class="col-lg-3 text-center">
            </div>


            <div class="col-lg-5 text-center">
                <p>Sobre esta aplicacion .
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
  </div>





<!--*************************************************************************************-->
<!--*************************************************************************************-->

                                          <!-- Modal Registrarse -->



<div class="modal fade" id="Registratse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Registratse</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal"  action="index.php" method="post">
        <fieldset>
            <legend>Ingrese todo los datos requeridos.</legend>
              <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label" required>Nombre</label>
                  <div class="col-lg-10">
                    <input type="text" name="nombre_registrarse" class="form-control" id="inputEmail" placeholder="Nombre" required>
                  </div>
              </div>
              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label" required>Apellido</label>
                <div class="col-lg-10">
                  <input type="text" name="apellido_registrarse" class="form-control" id="apellido" placeholder="Apellido" required>
                </div>
              </div>
              <div class="form-group">
                  <label for="inputDocumento" class="col-lg-2 control-label">Documento</label>
                  <div class="col-lg-10">
                    <input type="text" name="dni_registrarse"  class="form-control" id="inputDocumento" placeholder="Dni" required>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputFechaNacimiento" class="col-lg-2 control-label" >Fecha de Nacimientó</label>
                  <div class="col-lg-10">
                    <input type="text" name="FechaNacimiento"  class="form-control" id="inputFechaNacimiento" placeholder="dia/mes/años" >
                  </div>
              </div>
              <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" name="email_registrarse" class="form-control" id="inputEmail"  placeholder="E.G: Minombre@gmail.com" required required>
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputCelular" class="col-lg-2 control-label" >Celular</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Celular_registrarse" class="form-control" id="inputCelular" placeholder="Celular" required>
                    </div>
               </div>
              <div class="form-group">
                    <label for="inputTelefonoFijo" class="col-lg-2 control-label">Telefono fijo</label>
                    <div class="col-lg-10">
                      <input type="integer" name="Telefono_fijo_registrarse" class="form-control" id="inputTelefonoFijo" placeholder="Telefono fijo">
                    </div>
               </div>

              <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Direccion</label>
                     <div class="col-lg-10">
                         <input type="text" name="Direccion_registrarse"  class="form-control" id="inputEmail" placeholder="Direcion" required>
                    </div>
              </div>
            <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password nuevo</label>
                 <div class="col-lg-10">
                        <input type="password" name="pass_registrarse" class="form-control" id="inputPassword" placeholder="Contraseña nueva, necesaria para esta aplicacion" required >
         
                </div>
            </div>


              <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                  </div>
              </div>
         </fieldset>  
      </form>
      </div>

    </div>
  </div>
</div>



<!--*************************************************************************************-->
<!--*************************************************************************************-->

                                          <!-- Modal login -->


<div class="modal fade" id="Ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">login
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title  text-center" id="myModalLabel">Ingresar</h4>
            </div>

      <div class="modal-body">

            <form class="form-horizontal"  id="formLoginEmail"  method="post">
                <input type="hidden" id="id_claim_e" value="{$id_claim_email}">
                <input type="hidden" name="id_person_of_reclaim" value="{$id_person_of_reclaim}">

              <fieldset>
                <legend>Datos de usuario.</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email"  name="email_login"  class="form-control" id="inputEmail"  placeholder="E.J: TuNombre@gmail.com " required >
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword"  class="col-lg-2 control-label" required>Contraseña</label>
                          <div class="col-lg-10">
                            <input type="password" name="pass_login" class="form-control" id="inputPassword" placeholder="Password"  placeholder="contraseña para esta aplicacion" required>
                            <div id="error_login_div">
                                {include file="error_login.tpl" }
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" id="iniciar" class="btn btn-primary">Ingresar</button>
                      </div>
                    </div>
                     </form>
                         <script src="./js/Ajax_login_claims_email.js"></script>
                 </fieldset>

           
        </div>
   
    </div>
  </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    <script src="./js/inputFile.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- Carrusel-->



    {include file="footer.tpl" }