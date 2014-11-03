<?php /* Smarty version 2.6.27, created on 2014-11-03 15:54:54
         compiled from answer_sector.tpl */ ?>
             
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
                <?php $_from = $this->_tpl_vars['claims_sector']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['info_sector']):
?>
	                <td><?php echo $this->_tpl_vars['info_sector']['nombre_sector']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['info_sector']['id_empleado']; ?>
</td>	                
	                <td><?php echo $this->_tpl_vars['info_sector']['estado_reclamo']; ?>
</td>               
	                <td><?php echo $this->_tpl_vars['info_sector']['fecha']; ?>
</td>
	                <td><?php echo $this->_tpl_vars['info_sector']['respuesta_sector']; ?>
</td>

                </tr>
              <?php endforeach; endif; unset($_from); ?>
              </tbody>
            </table>
            </div>
         