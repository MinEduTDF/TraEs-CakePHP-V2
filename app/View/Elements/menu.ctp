<!-- ************ bootstrap navbar ************ -->
<p>
<nav class="navbar navbar-custom navbar-static-top navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Mostrar/ocultar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">-->TraEs. [ <span class="glyphicon glyphicon-user"</span> <?php echo $this->Html->link($current_user['username'], array('controller' => 'users', 'action' => 'view', $current_user['id'])); ?> ]<!--</a>-->
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if($current_user['role'] == 'admin'): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Agentes'),'/empleados'); ?></li>
            <li><?php echo $this->Html->link(__('Usuarios'),'/users'); ?></li>
          </ul>
        </li>
		<?php endif; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cajas curriculares <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Ciclos'),'/ciclos'); ?></li>
            <li><?php echo $this->Html->link(__('Titulaciones'),'/titulacions'); ?></li>
            <li><?php echo $this->Html->link(__('Secciones'), '/cursos'); ?></li>
            <li><?php echo $this->Html->link(__('Espacios'), '/materias'); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumnado <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Legajos'),'/alumnos'); ?></li>
            <li><?php echo $this->Html->link(__('Inscripciones'), '/inscripcions'); ?></li>
            <li><?php echo $this->Html->link('Matrículas', array('controller' => 'cursos_inscripcions', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link(__('Inasistencias'), '/inasistencias'); ?></li>
            <li><?php echo $this->Html->link(__('Calificaciones'), '/notas'); ?></li>
            <li><?php echo $this->Html->link(__('Mesa de Exámenes'), '/mesaexamens'); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recursos <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><?php echo $this->Html->link(__('Tablas'),'/report_manager/reports');?></li>
           <li><?php echo $this->Html->link(__('Gráficos'), '/graficos'); ?></li>
           <li><?php echo $this->Html->link(__('Calendario'),'/full_calendar');?></li>
          </ul>
        </li>
        <li>

		<?php echo $this->Html->link('CERRAR SESIÓN', '/logout', array('class' => 'btn btn-success navbar-btn btn-lg', 'escape' => false)); ?>
        </li>
      </div> <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>