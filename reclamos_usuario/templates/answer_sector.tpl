 
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
                {foreach from=$answer_sectores item=answer_sectores}
                  <td>{$answer_sectores.id_sector}</td>
                  <td>{$answer_sectores.id_empleado}</td>                 
                  <td>{$answer_sectores.estado_reclamo}</td>               
                  <td>{$answer_sectores.fecha}</td>
                  <td>{$answer_sectores.respuesta_sector}</td>

                </tr>
              {/foreach}
              </tbody>
            </table>
            </div>
         