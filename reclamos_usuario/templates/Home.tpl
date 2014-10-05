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
          <a class="navbar-brand" href="#">Realizar reclamos</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.laprida.gob.ar/">Enlace Pagina Municipal</a></li>
            <li><a href="index.php?action=cerrar_sesion.tpl">Cerrar Sesion</a></li>
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
             <a  title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Modificar_perfil" >Configurar perfil</a>
             </li>
            <li><a >Galeria de fotos subidas</a></li>
            <li><a href="#">Mis Reclamos Pendientes</a></li>
            <li><a href="#">Contactos con secretaria</a></li>
            <li><a  title="Click para registrarse y comenzar a utilizar la aplicacion" data-toggle="modal" data-target="#Manejo_del_reclamo_por_cada_area">Manejo del reclamo para cada area</a></li>
           <li><a href="#">Informacion sobre la aplicacion</a></li>
          </ul>
         
        </div>
        <div class="panel panel-danger">
 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4 class="page-header">Crear / ver mis reclamos</h4>

          <div class="row placeholders" id="seccionFoto" >

            <div class="col-xs-12 col-lg-5 placeholder">
                 <div class="col-lg-5">
              <img src="./imagenes/SinImagen.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Bienvenido</h4>
              <span class="text-muted">Franco Aller</span>
              </div>
              <p id="Parrafo">Usted puede crear un reclamo sobre un problema que le acoja, siempre y cuando le competa al municipio hacerse responsable. Aqui usted podra elegir el area al cual enviar el reclamo, para que este se agregue a la lista de problemas a resolver de cada area.
              Para ir viendo la evolucion de su reclamo puede mirarlo con detalle, oprimiendo el boton ver / modificar que aparece mas abajo en la lista.
              Sea paciente y en caso de que no vea la evolucion del mismo dentro del mes competente , puede mandarle un mail al area para preguntarle que es lo que susede con su reclamo.</p>
            </div>

      <div class="col-xs-6 col-sm-1 placeholder  offset3">   

      </div>
<div class="col-xs-12 col-sm-3 placeholder  offset3">   
 <div class="col-xs-12 col-sm-11 placeholder  offset3">       
<div class="panel panel-info ">
  <div class="panel-heading">
    <h3 class="panel-title">Reclamos Solucinados</h3>
  </div>
  <div class="panel-body">
    4
  </div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-3 placeholder  offset3">   
 <div class="col-xs-12 col-sm-11 placeholder">       
<div class="panel panel-danger ">
  <div class="panel-heading">
    <h3 class="panel-title">Reclamos Pendientes</h3>
  </div>
  <div class="panel-body">
    2
  </div>
</div>

</div>
</div>

 <div class="col-xs-6 col-sm-1 placeholder  offset3">   
      
</div> 

    <div class="col-xs-12 col-lg-6 placeholder">
<form class="form-horizontal"  action="index.php?action=reclamoNuevo" method="post">
 <select class="form-control" name="reclamo_selector" id="selectorSectores">
    <option value="sa"> Seleccione el area competente</option>
    <option value="O"   > Obras Publicas</option>
    <option value="i"   >Infraestructura</option>
    <option value="a" >Asfalto</option>
    <option value="ie"  >Intendente</option>
    <option value="l"   >Luminaria</option>
    <option value="ar"  >Arboleda</option>
    <option value="clo" >Cloacas</option>
    <option value="gas" >Gas</option>
    <option value="basura" >Basura</option>
</select>
      <textarea class="form-control" rows="5" name="reclamo_texto"  ></textarea>
         <div class="col-lg-5 col-lg-offset 0">
        <button class="btn btn-default">Borrar</button>
        <button type="submit" class="btn button-Mi-Estilo" >Enviar</button>
      </div>
      <div class="col-xs-3 col-lg-3">
<input type="file" class="btn btn-primary button-Mi-Estilo" name="reclamo_foto" data-buttonName="btn-primary" >
</div>
</form>
</div> 

 <div class="col-xs-6 col-sm-3 placeholder">


  </div> 


          </div>

          <h3 class="sub-header">Mis peticiones</h3>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la peticion y/o reclamo">Numero P</th>
                  <th data-toggle="tooltip" data-placement="left" title="Fecha en que se realizo el reclamo">Fecha</th>
                  <th  data-toggle="tooltip" data-placement="left" title="Sector al que se le envio el reclamo">Sector Competente</th>
                   <th data-toggle="tooltip" data-placement="left" title="El area en el que se encuentra el reclamo, 'cada reclamo pasa de area en area hasta que cuple su siclo y termina'">Area en la que se encuentra</th>
                  <th data-toggle="tooltip" data-placement="left" title="informa entre otras cosas, si fue o no aceptado el reclamo y/o el estado del mismo">Estado de la misma</th>
                  <th data-toggle="tooltip" data-placement="left" title="Puede ver todos los detalles faltantes precionando 'ver', o modificar el reclamo precionando 'modificar' ">Acciones</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                {foreach from=$reclamos item=i}
                  <td>{$i.id_reclamo}</td>
                  <td>{$i.fecha}</td>
                  <td>{$i.sector_raiz}</td>
                  <td>{$i.area_actual}</td>
                  <td>{$i.estado_reclamo}</td>
                  <td><button type="submit" data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo">Ver / Modificar</button></td>
                </tr>{/foreach}

              </tbody>
            </table>
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
       <form class="form-horizontal"  action="index.php" method="post" >
              <fieldset>
                <legend>Datos de usuario</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="text"  name="email_login"  class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword"  class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
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