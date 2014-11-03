
{include file="head.tpl" }

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> <i class="fa fa-user"></i> Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Franco Aller</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$user}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?action=cerrar_sesion.tpl"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Configurar Perfil</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Chats entre areas</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tareas </a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-calendar"></i>f Calendario/Citas</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- /.row en blanco -->
                <div class="row">
                    <div class="col-lg-12">
    
                    </div>
                </div>
                <!-- /.row en blanco-->
                <!-- /.row -->

<h4 class="page-header">Informacion del Reclamador.</h4>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              

                                <div class="row">
                               {foreach from=$data_reclaimer item=reclaimer} 
                                     <div class="col-lg-3  col-xs-7">
                                            <div class=" col-lg-12 col-xs-8 ">
                                               <img data-toggle="modal" data-target="#foto_perfil_modal"  class=" thumbnail  col-lg-12" src='./imagenes/{$reclaimer.foto_perfil}'>

                                             </div>
                                    </div>
                             
                                     <div class="col-lg-6 col-xs-8">
                                            <div class="col-xs-11"  style="margin-top:3em;">
                                            Nombre: {$reclaimer.nombre}
                                           </div>
                                     </div>
                                     <div class="col-lg-6 col-xs-8">
                                            <div class="col-xs-11">
                                             Apellido: {$reclaimer.apellido}
                                           </div>
                                     </div>                                     
                                     <div class="col-lg-6 col-xs-8">
                                            <div class="col-xs-11">
                                              Direccion: {$reclaimer.direccion}
                                             </div>
                                    </div>
                                     <div class="col-lg-6 col-xs-8">
                                            <div class="col-xs-11">
                                              Celular: {$reclaimer.celular}
                                             </div>
                                    </div>  

                                     <div class="col-lg-9 col-xs-8">
                                        <button class="btn btn-default col-lg-12" style="margin-top:3.8em;">
                                            Ver mas detalles del reclamador.
                                        </button>
                                    </div> 


  {/foreach}

                        
                                 </div>   

                            </div>

                        </div>

                    </div>

               <!--FINALIZA LOS CUADROS INFORMATIVOS "PANELES"-->

              <!--COMIENZA SECCION BOTONES ACCIONES-->

    <div class="row">
         <div class="col-lg-3 col-xs-6">

        </div><!-- ./col -->
    </div><!-- /.row -->


                    
  <div class="row">
         <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i>  Reclamo/Petición:</h4>
         </div>
 <div class="col-lg-9 col-sm-1 placeholder offset3 cuadro_del_reclamo">   
     <div class="container col-lg-12">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#profile" data-toggle="tab"><i class="glyphicon glyphicon-user "></i> </a></li>
       </ul>
        

         {foreach from=$data_claim item=claim}
        <div class="tab-content">
              <div class="tab-pane active" id="profile">
                    <p>{$claim.reclamo}</p>
              </div>
        </div>  
          
   </div>
 </div>
    <div class="col-lg-3 col-sm-1 placeholder offset3"  data-toggle="modal" data-target="#foto_reclamo_modal" id="foto_reclamo">                        
            <img  class=" thumbnail col-lg-12" src='{$claim.foto_reclamo}'>
    </div> 

 </div>   

    </div>

     <div class="row">
         <div class="container-fluid col-lg-12 col-md-6"  >
            <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i>  Respuesta de los sectores:</h4>
            </div>
        <div class="col-lg-12 col-md-6">


        <!--*********TABLA RESPOND_SECTOR.TPL****************-->
         <div class="col-lg-12" id="respond_of_the_sector">
           {include file="answer_sector.tpl"}          
        
        </div>  
          <!--*********FIN TABLA RESPOND_SECTOR.TPL****************-->

        </div>  

        <form class="form-horizontal "   method="POST" id="" action="index.php" >
          <!--input oculto para enviar el id del reclamo-->
        <input type="hidden" name="id_claim_to_respond"     value="{$claim.id_reclamo}">
        <input type="hidden" name="id_person_to_respond"    value="{$claim.id_persona}">

        
    {/foreach}
         <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i>  Mi Respuesta al reclamo:</h4>
         </div>
         <div class="col-xs-9 col-lg-4">
              <select class="form-control " name="selector_state" id="" >
                        <option >ELIJA UN ESTADO</option>
                        <option value="Aceptado"    > Aceptado</option>
                        <option value="Aplazado"    >Aplazado</option>
                        <option value="Rechazado"   >Rechazado</option>
                        <option value="Sujeto a inspeccion" >Sujeto a inspeccion</option>
                        <option value="Verificado"  >Verificado</option>
                        <option value="dp"  >Verificando.exist.partida presupuest.</option>
                        <option value="Finalizado"  >Finalizado</option>

             </select>
        </div>
         <div class="col-xs-9 col-lg-3">
                  <input type="file" class="btn " name="documento_pre_hecho" id="document" data-buttonName="btn-primary" >
        </div>
         <textarea class="form-control" rows="8" colums="10" name="respond_claim_text" id="reclamo_texto" ></textarea>

        <div class="col-lg-12 col-md-6">
                 <h4 class="page-header text-left"> <i class="fa fa-angle-double-right fa-1x"></i> Redirigir al siguiente sector:</h4>
         </div>


                 <select class="form-control col-lg-6"  name="claim_selector_sector" id="reclamo_selector">
                    <option value="0"> Seleccione el área correspondiente</option>
                    <option value="1">Obras Públicas                     </option>
                    <option value="2">Infraestructura                     </option>
                    <option value="3">Asfalto                              </option>
                    <option value="4">Intendente                           </option>
                    <option value="5">Luminaria                            </option>
                    <option value="6">Arboleda                             </option>
                    <option value="7">Cloacas                              </option>
                    <option value="8">Gas                                  </option>
                    <option value="9">Basura                               </option>
                 </select>
                

              
                <textarea class="form-control" rows="8" colums="10" name="sector_text" id="reclamo_texto" ></textarea>
    
                <div class="col-lg-3 col-lg-offset 0">
                    <p class="btn btn-default" id="b-borrar_txt"><i class="fa fa-trash" ></i> Borrar</p>
                   <button type="submit" id="b-submit" class="btn button-Mi-Estilo"  ><i class="fa fa-arrow-circle-right"></i> Enviar</button>

               </div>

 
            </form>
         </div>
      </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


             <!-- Modal foto del reclamo -->

<div class="modal fade" id="foto_reclamo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto ingresada del reclamo</h4>
      </div>
      {foreach from=$data_claim item=data_claim}
      <div class="modal-body">
           <img  class=" thumbnail col-lg-12" src='{$data_claim.foto_reclamo}'>
      </div>
       {/foreach}
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

             <!-- Modal foto de perfil del reclamante -->

<div class="modal fade" id="foto_perfil_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Foto ingresada del reclamo</h4>
      </div>
      <div class="modal-body">
           <img  class=" thumbnail col-lg-12" src=''>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

  


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/morris-data.js"></script>
    <script src="js/bootstrap.js"></script>



    {include file="footer.tpl" }