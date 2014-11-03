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
          <a class="navbar-brand" href="#"><i class="fa fa-home"></i>  Mis reclamos o peticiones</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.laprida.gob.ar/"><i class="fa fa-external-link-square"></i>  Enlace Pagina Municipal</a></li>
            <li><a href="index.php?action=cerrar_sesion"><i class="fa fa-unlock-alt"></i>  Cerrar Sesion</a></li>
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
            <li><a ><i class="fa fa-picture-o"></i> Galería de fotos subidas</a></li>
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
          <h4 class="page-header">Informacion del R/P.</h4>
         <!-- </div>
            <div class="col-lg-2 col-md-6  fixed-top">
            <p><i class="text-right fa fa-user fa-2x "></i> 
               Franco</p>-->
          <!--</div>

          </div>
          -->
          <div class="row placeholders" id="seccionFoto" >
  

  <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                
                                
                                     <div class="col-xs-8">
                                            <div class="col-xs-11">
                                            Lista de recorrido default: 1
                                           </div>
                                     </div>
                                     <div class="col-xs-8">
                                            <div class="col-xs-11">
                                              Estado del R/P: En Tramite
                                             </div>
                                    </div>                                     <div class="col-xs-8">
                                        <div class="col-xs-12">
                                          Sectores pro los que ha pasado
                                         </div>
                                </div>

                                     <div class="col-xs-8">
                                            <div class="col-xs-8">
                                                
                                             </div>
                                    </div>

                                 </div>   
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                       
  <div class="row">
         <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i>  Reclamo/Petición:</h4>
         </div>
 </div>
 <div class="col-lg-9 col-sm-1 placeholder offset3 cuadro_del_reclamo">   
     <div class="container col-lg-12">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#profile" data-toggle="tab">                    <h4><i class="glyphicon glyphicon-user"></i></h4>
</a></li>
       </ul>
        
        <div class="tab-content">
              <div class="tab-pane active" id="profile">
                    <p>{$dato_del_reclamo}</p>
              </div>
        </div>  
   </div>
 </div>


    <div  class="col-lg-3 col-sm-1 placeholder offset3" data-toggle="modal" data-target="#foto_reclamo_modal" id="foto_reclamo">  
            <img  class=" thumbnail col-lg-12" src='{$foto_reclamo}'>

    </div> 

    <div class="row">
             <div class="col-lg-12 col-md-6">
                   <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i>  Respuesta de los sectores:</h4>
             </div>
    </div>


<!--TABLE ANSWER SECTOR-->
<div class="col-lg-12 col-sm-1 placeholder offset3 cuadro_del_reclamo" id="cuadro_respuesta_sector">   
    {include file="answer_sector.tpl" }
</div>
<!--END TABLE ANSWER SECTOR-->

<div class="col-lg-11">
  <hr>
      
      <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Chats</strong></a>  
      
      <hr>
      
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li>
          </ul>
        </div>
      </div>
    </div><!--/col-span-9-->



    <div class="col-xs-12 col-lg-12 placeholder">
<form class="form-horizontal "  action="index.php?action=reclamoNuevo" method="post">


      <textarea class="form-control" rows="8" colums="12" name="reclamo_texto"  >
        
      </textarea>


         <div class="col-lg-3 col-lg-offset 0">
        <button class="btn btn-default"><i class="fa fa-trash"></i> Borrar</button>
        <button type="submit" class="btn button-Mi-Estilo" ><i class="fa fa-arrow-circle-right"></i> Enviar</button>
      </div>
      <div class="col-xs-9 col-lg-3">
<input type="file" class="btn btn-primary button-Mi-Estilo" name="reclamo_foto" data-buttonName="btn-primary" >
</div>
</form>
</div> 

 <div class="col-xs-6 col-sm-3 placeholder">


  </div> 


          </div>


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

                  <!-- Modal foto del reclamo -->

<div class="modal fade" id="foto_reclamo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto ingresada del reclamo</h4>
      </div>
      <div class="modal-body">
           <img  class=" thumbnail col-lg-12" src='{$foto_reclamo}'>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
    <script src="./js/Carrusel.js"></script>
    <!--index-->
    <script src="./js/index.js"></script>


    {include file="footer.tpl" }