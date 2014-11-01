             
        <div class="table-responsive">

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la reclamo y/o peticion ">Numero R/P</th>
                  <th data-toggle="tooltip" data-placement="left" title="Fecha en que se realizo el reclamo"><i class="fa fa-calendar"></i> Fecha</th>   <th data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'">Estado del reclamo</th>
                  <th  data-toggle="tooltip" data-placement="left" title="Sector raiz al que se le envio el reclamo"><i class="fa fa-users"></i> Sector Raiz</th>
                
                  <th data-toggle="tooltip" data-placement="left" title="id de la persona que realizo el reclamo."> <i class="fa fa-user"></i> Dni</th>
                  <th data-toggle="tooltip" data-placement="left" title="Puede ver todos los detalles faltantes precionando 'ver', o modificar el reclamo precionando 'modificar' ">Acciones</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                {foreach from=$reclamos item=i}
                <td>{$i.id_reclamo}</td>
                <td>{$i.fecha}</td>
                <td>{$i.estado_reclamo}</td>
                <td>{$i.sector_raiz}</td>
                <td>{$i.dni_persona}</td>
                  <td>
                      <form  action="index.php?action=view_claims_especific" method="post">
                      <input type="hidden" name="id_reclamo" value='{$i.id_reclamo}'>
                      <button  type="submit"  data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo"><i class="fa fa-eye"></i> Ver / Modificar  <i class="fa fa-pencil"></i></button ></td>
                      </form>
                </tr>
                {/foreach}

              </tbody>
            </table>
            </div>
                <script src="js/Ajax_tabla_reclamos.js"></script>
