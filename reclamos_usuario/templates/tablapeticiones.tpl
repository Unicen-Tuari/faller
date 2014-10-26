          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th data-toggle="tooltip" data-placement="left" title="Numero de la peticion y/o reclamo"><i class="fa fa-key"></i>Número P</th>
                  <th data-toggle="tooltip" data-placement="left" title="Fecha en que se realizo el reclamo"><i class="fa fa-calendar"></i>Fecha</th>
                  <th  data-toggle="tooltip" data-placement="left" title="Sector al que se le envio el reclamo"><i class="fa fa-users"></i>Sector Correspondiente</th>
                   <th data-toggle="tooltip" data-placement="left" title="El area en el que se encuentra el reclamo, 'cada reclamo pasa de area en area hasta que cuple su siclo y termina'">Área en la que se encuentra</th>
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
                  <td>
                      <form  action="index.php?action=ver_o_modificar" method="post">
                      <input type="hidden" name="id_reclamo" value='{$i.id_reclamo}'>
                      <button  type="submit"  data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo"><i class="fa fa-eye"></i> Ver / Modificar  <i class="fa fa-pencil"></i></button ></td>
                      </form>
                </tr>
                {/foreach}

              </tbody>
            </table>
          </div>
