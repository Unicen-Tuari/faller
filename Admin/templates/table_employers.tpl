             
        <div class="table-responsive">

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la reclamo y/o peticion "> <i class="fa fa-user"></i> Nombre</th>
                  <th data-toggle="tooltip" data-placement="left" title="Fecha en que se realizo el reclamo"> Apellido</th>   <th data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'">Dni</th>
                  <th  data-toggle="tooltip" data-placement="left" title="Sector raiz al que se le envio el reclamo"></i> Estado</th>
                
                  <th data-toggle="tooltip" data-placement="left" title="id de la persona que realizo el reclamo."> Puesto</th>
                  <th data-toggle="tooltip" data-placement="left" title="Puede ver todos los detalles faltantes precionando 'ver', o modificar el reclamo precionando 'modificar' ">Alta / Baja </th>

                  <th data-toggle="tooltip" data-placement="left" title="Puede ver todos los detalles faltantes precionando 'ver', o modificar el reclamo precionando 'modificar' ">Ver Detalles </th>
                </tr>                
              </thead>
              <tbody>
                {foreach from=$employers item=employ}

                <tr>
                <td>{$employ.nombre}</td>
                <td>{$employ.apellido}</td>
                <td>{$employ.dni_empleado}</td>
                <td>{$employ.activo}</td>
                <td>{$employ.puesto_espesifico}</td>
                  <td>
                      <form  id="Baja_alta_employ" action="index.php" method="POST">
                      <input type="hidden" name="id_empleado" value='{$employ.id_empleado}'>
                     <input type="hidden" name="state" value='{$employ.activo}'>
                      <button  type="submit"  data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo"><i class="fa fa-pencil"></i>
                      </button >
                      </form>
               </td>
                   <td>
                  <form  id="Detail_employ" method="post">
                      <input type="hidden" name="id_empleado" value='{$employ.id_empleado}'>
                      <button  type="submit"  data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo">  <i class="fa fa-eye"></button ></td>
                      </form>
                     </tr>  
                    
                {/foreach}

              </tbody>
            </table>
            </div>
                <script src="js/Ajax_table_employers.js"></script>
