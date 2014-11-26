             
        <div class="table-responsive">

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la reclamo y/o peticion ">Sector
                  </th>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la reclamo y/o peticion ">Empleado
                  </th>                  
                   <th data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'">
                   Estado del reclamo
                   </th>
                  <th data-toggle="tooltip" data-placement="left" title="Fecha en que se realizo el reclamo"><i class="fa fa-calendar"></i> Fecha
                  </th>   

                  <th  data-toggle="tooltip" data-placement="left" title="Respuesta del sector">
                  <i class="fa fa-users"></i>Respuesta
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                {foreach from=$claims_sector item=info_sector}
	                <td>{$info_sector.nombre_sector}</td>
	                <td>{$info_sector.id_empleado}</td>	                
	                <td>{$info_sector.estado_reclamo}</td>               
	                <td>{$info_sector.fecha}</td>
	                <td>{$info_sector.respuesta_al_reclamo}</td>

                </tr>
              {/foreach}
              </tbody>
            </table>
            </div>
         