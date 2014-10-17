<?php /* Smarty version 2.6.27, created on 2014-10-17 15:22:59
         compiled from tablapeticiones.tpl */ ?>
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
                <?php $_from = $this->_tpl_vars['reclamos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
                  <td><?php echo $this->_tpl_vars['i']['id_reclamo']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['fecha']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['sector_raiz']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['area_actual']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['i']['estado_reclamo']; ?>
</td>
                  <td>
                      <form  action="index.php?action=ver_o_modificar.tpl" method="post">
                      <input type="hidden" name="id_reclamo" value='<?php echo $this->_tpl_vars['i']['id_reclamo']; ?>
'>
                      <button  type="submit"  data-toggle="tooltip" data-placement="left" title="Todos los detalles sobre este reclamo / modificar el reclamo" class="btn btn-primary col-lg button-Mi-Estilo"><i class="fa fa-eye"></i> Ver / Modificar  <i class="fa fa-pencil"></i></button ></td>
                      </form>
                </tr>
                <?php endforeach; endif; unset($_from); ?>

              </tbody>
            </table>
          </div>