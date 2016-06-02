<div class="col-md-4">
    <div class="unit">
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Año: </b> <?php echo $curso['Curso']['anio']; ?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>División: </b> <?php echo $curso['Curso']['division']; ?></span><br/>
         <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Turno: </b> <?php echo $curso['Curso']['turno']; ?></span><br/>
         <hr />
         <div class="text-right">
             <span class="link"><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-edit"></i>'), array('action' => 'edit', $curso['Curso']['id']), array('class' => 'btn btn-warning','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class= "glyphicon glyphicon-eye-open"></i>', array('controller' => 'cursos', 'action' => 'view', $curso['Curso']['id']), array('class' => 'btn btn-success','escape' => false)); ?></span>
             <span class="link"><?php echo $this->Html->link('<i class="glyphicon glyphicon-trash"></i>', array('controller' => 'cursos', 'action' => 'delete', $curso['Curso']['id']), array('confirm' => 'Está seguro de borrar a '.$curso['Curso']['nombre_completo_curso'], 'class' => 'btn btn-danger','escape' => false)); ?></span> 
         </div>
    </div>
</div>