{include file="head.tpl" }
<body ><!-- href="index.php?action=home" -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-home"></i>  Mis reclamos o peticiones</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$email}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?action=cerrar_sesion"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
               <li>
                      <a href="http://www.laprida.gob.ar/"><i class="fa fa-external-link-square"></i>  Enlace Pagina Municipal</a>
                </li>
          </ul>



          <form class="navbar-form navbar-right">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Ver/crear reclamo</a></li>
            <li>
             <a  title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Modificar_perfil" ><i class="fa fa-cog"></i> Configurar perfil</a>
             </li>
            <li><a ><i class="fa fa-picture-o"></i> Reclamos que ya se han resuelto de la población</a></li>
            <li><a href="#">Mis Reclamos Pendientes</a></li>
            <li><a href="#"><i class="fa fa-tty"></i> Contactos con Secretaría</a></li>
            <li><a  title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Manejo_del_reclamo_por_cada_area"> <i class="fa fa-code-fork"></i> Manejo del reclamo para cada area</a></li>
           <li><a href="#"><i class="fa fa-info-circle"></i> Información sobre la aplicación</a></li>
          </ul>
         
        </div>
        <div class="panel panel-danger">
 
        <div class="col-sm-2 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!--  <div class="col-lg-12 col-md-6">

         <div class="col-lg-12 col-md-6">
        -->
          <h4 class="page-header">Paneles informativos.</h4>
         <!-- </div>
            <div class="col-lg-2 col-md-6  fixed-top">
            <p><i class="text-right fa fa-user fa-2x "></i> 
               Franco</p>-->
          <!--</div>

          </div>
          -->
          <div class="row placeholders" id="seccionFoto" >
  

  <div class="row">
        <!--******************PANELES INFORMATIVOS*********************************** -->
          <div id="div_paneles_informativos">
              {include file="Paneles_informativos.tpl"}
          </div> 
    <!--***********************FIN PANELES INFORMATIVOS ******************************-->               
  <div class="row">
                    <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-pencil fa-1x"></i>  Crear Nuevo R/P</h4>
                 </div>
                 </div>
 <div class="col-xs-7 col-sm-1 placeholder  offset3">   
</div> 

<div class="col-xs-12 col-lg-12 placeholder">
<form class="form-horizontal "   method="POST" id="crear_r">

     <select class="form-control"  name="reclamo_selector" id="reclamo_selector">
        <option value="0"> Seleccione el área correspondiente</option>
        <option value="1"> Obras Públicas                     </option>
        <option value="2">Infraestructura                     </option>
        <option value="3">Asfalto                              </option>
        <option value="4">Intendente                           </option>
        <option value="5">Luminaria                            </option>
        <option value="6">Arboleda                             </option>
        <option value="7">Cloacas                              </option>
        <option value="8">Gas                                  </option>
        <option value="9">Basura                               </option>
     </select>

  
    <textarea class="form-control" rows="8" colums="10" name="reclamo_texto" id="reclamo_texto" ></textarea>
  
 
<div style="display:none" id="div_f" class="item itemJQuery">
            <div style="margin-top: 0px;" class="item-billboard" id="div_foto_ingresada">
                  <img src="" alt="imagen ejemplo" title="Reaccion Estudio">   
            </div>
            <div class="item-detail" data-toggle="modal" data-target="#M_Foto_Del_reclamo">
                  <H1>zoom</H1>
                  <i class="fa fa-arrows-alt fa-5x"></i>
            </div>
</div>


        <button style="display:none; float:left; margin-left:1em;" class="btn btn-default " id="b-borrar_img"><i class="fa fa-trash" ></i> Imagen</button>

    <div class="col-lg-3 col-lg-offset 0">
        <p class="btn btn-default" id="b-borrar_txt"><i class="fa fa-trash" ></i> Borrar</p>
       <button type="submit" id="b-submit" class="btn button-Mi-Estilo"  ><i class="fa fa-arrow-circle-right"></i> Enviar</button>

   </div>

   <div class="col-xs-9 col-lg-3">
      <input type="file" class="btn btn-primary button-Mi-Estilo" name="reclamo_foto" id="reclamo_foto" data-buttonName="btn-primary" >
    </div>
</form>

</div> 
 <div class="col-xs-6 col-sm-3 placeholder">
</div> 


</div>
    <!--******************TABLA RECLAMOS*********************************** -->
          <h3 class="sub-header">Mis peticiones</h3>
          <div id="div_tabla_peticiones">
              {include file="tablapeticiones.tpl"}
          </div> 
    <!--***********************FIN TABLA RECLAMOS ******************************-->
        </div>
      </div>
    </div>


<div class="container-fluid">
<!-- Modal configurar perfil -->

<div class="modal fade" id="Modificar_perfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Configurar Mi Perfil</h4>
      </div>
      <div class="modal-body">
      <!--trabajador.png-->
  <div class="row">
    <div class="col-lg-2">
      <img src="./imagenes/trabajador.png" alt="..." class="img-circle">
   </div>
      </div>

       <form class="form-horizontal"  action="index.php" method="post" >
              <fieldset>
                <legend>Datos de usuario</legend>
                    <div class="form-group">
                    <div class="col-lg-6">
                      <p>Mail: <span>franco_h_62@gmail.com</span></p>
                       </div>
                          <div class="col-lg-6">
                            <input type="text"  name="email_login"  class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                    </div>
                    <div class="form-group">
                    <div class="col-lg-">
                      <p>Contraseña: <span></span></p>
                    </div>
                      <label for="inputPassword"  class="col-lg-3 control-label">Contra.Nueva</label>
                          <div class="col-lg-6">
                            <input type="password" name="pass_login" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                      </div>
                    </div>
                 </fieldset>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal configurar manejo del reclamo por cada area -->
<div class="modal fade" id="Manejo_del_reclamo_por_cada_area" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button data-dismiss="alert" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Aqui puedes los pasos a seguir que debe realizar cada area raiz</h4>
      </div>
      <div class="modal-body">
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
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        -->
      </div>
    </div>
  </div>
</div>

<!--************************* modal foto ingresada en reclamo ************************-->


<!-- Modal -->
<div class="modal fade" id="M_Foto_Del_reclamo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto ingresada del reclamo.</h4>
      </div>
      <div class="modal-body text-center" id="div_modal_foto_ingresada" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--************************* fin de modal foto ingresada en reclamo ************************-->


</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>


    <!--*************Ajax_accion_crear_reclamos.js*****************************-->
    <script src="./js/Ajax_accion_crear_reclamos.js"></script>
    <!--*************FIN DE Ajax_accion_crear_reclamos.js*************-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- Carrusel-->
    <!--index-->
    <script src="./js/index.js"></script>

    <script src="./js/AccionDeBotones.js"></script>



 <script src="js/Acciones_reclamo_ingresado.js"></script>

    {include file="footer.tpl" }