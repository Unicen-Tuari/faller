<?php /* Smarty version 2.6.27, created on 2014-10-02 23:53:10
         compiled from Home.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body acction="home">
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
            <li><a href="#">Enlace Pagina Municipal</a></li>
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
            <li><a href="#">Configurar perfil</a></li>
            <li><a href="#">Galeria de fotos subidas</a></li>
            <li><a href="#">Mis Reclamos Pendientes</a></li>
            <li><a href="#">Contactos con secretaria</a></li>
            <li><a href="#">Manejo del reclamo para cada area</a></li>
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
<form class="form-horizontal" name="crear_reclamo_texto" action="index.php" method="post" >
 <select class="form-control" name="agregar_reclamo_selector" id="selectorSectores">
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
      <textarea class="form-control" rows="5" name="crear_reclamo_texto" ></textarea>
         <div class="col-lg-5 col-lg-offset 0">
        <button class="btn btn-default">Borrar</button>
        <button type="submit" class="btn button-Mi-Estilo" >Enviar</button>
      </div>
      <div class="col-xs-3 col-lg-3">
<input type="file" class="btn btn-primary button-Mi-Estilo" name="agregar_reclamo_foto" data-buttonName="btn-primary" >
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
                  <th>Numero Peticion</th>
                  <th>Fecha</th>
                  <th>Sector Competente</th>
                  <th>Estado de la misma</th>
                  
                </tr>
              </thead>
              <tbody>

                <tr>
                <?php $_from = $this->_tpl_vars['reclamos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                  <td><?php echo $this->_tpl_vars['i']['id_reclamo']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['fecha']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['sector_raiz']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['estado_reclamo']; ?>
</td>
                  <td><button type="submit" class="btn btn-primary col-lg button-Mi-Estilo">Ver / Modificar</button></td>
                </tr><?php endforeach; endif; unset($_from); ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="./js/inputFile.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>