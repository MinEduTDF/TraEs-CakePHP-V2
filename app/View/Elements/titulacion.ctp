<div class="unit">
   	   <span class="id"><?php echo $titulacion['Titulacion']['id']; ?></span>
	   <b>Nombre: </b><span class="name"><?php echo $titulacion['Titulacion']['nombre']; ?></span>
       <b>Orientación: </b><span class="name"><?php echo $titulacion['Titulacion']['orientacion']; ?></span><br>
       <b>Organización del plan: </b><span class="name"><?php echo $titulacion['Titulacion']['organizacion_plan']; ?></span><br>
	   <b>Organización de la cursada: </b><span class="name"><?php echo $titulacion['Titulacion']['organizacion_cursada']; ?></span><br>
       <b>Forma del dictado: </b><span class="name"><?php echo $titulacion['Titulacion']['forma_dictado']; ?></span><br>
       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), null, sprintf(__('Esta seguro que desea eliminar la inscripcion nº %s?'), $inscripcion['Inscripcion']['id'])); ?></span>-->
	   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'titulacions', 'action' => 'edit', $titulacion['Titulacion']['id'])); ?></span>
	   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'titulacions', 'action' => 'view', $titulacion['Titulacion']['id'])); ?></span>
     
</div> 