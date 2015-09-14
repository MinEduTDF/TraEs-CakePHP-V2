<div class="col-md-6">
		<div class="unit">
		       <span class="name"><span class="glyphicon glyphicon-info"></span> <b>Nombre:</b> <?php echo $titulacion['Titulacion']['nombre']; ?></span><br/>

		       <span class="name"><span class="glyphicon glyphicon-info"></span> <b>Orientación:</b> <?php echo $titulacion['Titulacion']['orientacion']; ?></span><br/>

		       <span class="name"><span class="glyphicon glyphicon-info"></span> <b>Organización del plan:</b> <?php echo $titulacion['Titulacion']['organizacion_plan']; ?></span><br/>

		       <span class="name"><span class="glyphicon glyphicon-info"></span> <b>Organización de la cursada:</b> <?php echo $titulacion['Titulacion']['organizacion_cursada']; ?></span><br/>

		       <span class="name"><span class="glyphicon glyphicon-info"></span> <b>Forma del dictado:</b> <?php echo $titulacion['Titulacion']['forma_dictado']; ?></span><br/>

		       <!--<span class="link"><?php echo $this->Html->link(__('Eliminar'), array('action' => 'delete', $titulacion['Titulacion']['id']), null, sprintf(__('Esta seguro que desea borrar la titulación %s?'), $titulacion['Titulacion']['nombre'])); ?></span>-->
		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'titulacions', 'action' => 'edit', $titulacion['Titulacion']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'titulacions', 'action' => 'view', $titulacion['Titulacion']['id']), array('class' => 'btn btn-success')); ?></span>
			   </div>
		</div>
</div>