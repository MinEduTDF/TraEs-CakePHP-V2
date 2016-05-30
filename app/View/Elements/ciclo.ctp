<div class="col-md-4">
    <div class="unit">
        <span class="name"><span class="glyphicon glyphicon-user"></span> <b>Nombre:</b> <?php echo ($ciclo['Ciclo']['nombre']); ?></span><br/>
        <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Inicio:</b> <?php echo ($ciclo['Ciclo']['fechaInicio']); ?></span><br/>
        <span class="name"><span class="glyphicon glyphicon-calendar"></span> <b>Finalización:</b> <?php echo ($ciclo['Ciclo']['fechaFinal']); ?></span><br/> 
        <hr />
        <div class="text-right">
           <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i>', array('action' => 'edit', $ciclo['Ciclo']['id']), array('class' => 'btn btn-warning', 'escape' => false)); ?></span>
           <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'ciclos', 'action' => 'view', $ciclo['Ciclo']['id']), array('class' => 'btn btn-success')); ?></span>
           <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'ciclos', 'action' => 'delete', $ciclo['Ciclo']['id']), array('confirm' => 'Está seguro de borrar a '.$ciclo['Ciclo']['nombre'], 'class' => 'btn btn-danger')); ?></span> 
        </div>
    </div>
</div>