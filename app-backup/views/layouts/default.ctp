
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
        <?php echo $html->charset('UTF-8')?>
        <?php echo $html->css('internet_services', 'stylesheet', array("media"=>"all" ));?>
	<title>S.I.G.E.D.U. - <?php echo $title_for_layout?></title>
        <?php echo $scripts_for_layout;?>
	    
</head>
<body>
	<div class="content">
	
		<div class="header">
			
			<div class="logo">
				<h1><a href="#" title="Centralized Internet Services"><span class="dark">S.I.G.E.D.U.</span></a></h1>
			</div>
		</div>
		
		
		<div class="bar">
			<ul>
				<?php if(isset($current_user)): ?>
				<li class="browse_category">Seleccionar seccion:</li>
				<?php if(!$this->Html->loggedIn()) { ?>
                        <li><?php echo $this->Html->link(__('Inicio', true), '/'); ?></li> 
                <?php } ?>
                
					<?php if($current_user['User']['role'] == 'administrador'): ?>
						<li><?php echo $this->Html->link(__('Usuarios', true), '/users'); ?></li>
						<li><?php echo $this->Html->link(__('Centros', true), '/centros'); ?></li>
						<li><?php echo $this->Html->link(__('Docentes', true), '/docentes'); ?></li>
						<li><?php echo $this->Html->link(__('Cargos', true), '/cargos'); ?></li>
						<li><?php echo $this->Html->link(__('Alumnos', true), '/alumnos'); ?></li>
						<li><?php echo $this->Html->link(__('Inscripciones', true), '/inscripcions'); ?></li>
						<li><?php echo $this->Html->link(__('Empleados', true), '/empleados'); ?></li>
						<li><?php echo $this->Html->link(__('Inventarios', true), '/inventarios'); ?></li>
						<!--<li><?php echo $this->Html->link(__('Ciclos', true), '/ciclos'); ?></li>-->
                        <!--<li><?php echo $this->Html->link(__('Modalidades', true), '/modalidads'); ?></li>-->
                        <!--<li><?php echo $this->Html->link(__('Orientaciones', true), '/orientacions'); ?></li>-->
				        <li><?php echo $this->Html->link(__('Reportes', true), '/report_manager/reports'); ?></li>	
					<?php endif;?>
					<?php if($current_user['User']['role'] == 'administrativo_institucional_docentes'):?>
						<!--<li><?php echo $this->Html->link(__('Cursos', true), '/cursos'); ?></li>-->
                        <!--<li><?php echo $this->Html->link(__('Materias', true), '/materias'); ?></li>-->
                        <!--<li><?php echo $this->Html->link(__('Horarios', true), '/horarios'); ?></li>-->
						<li><?php echo $this->Html->link(__('Docentes', true), '/docentes'); ?></li>
                        <!--<li><?php echo $this->Html->link(__('Tìtulos', true), '/titulos'); ?></li>-->
						<li><?php echo $this->Html->link(__('Cargos', true), '/cargos'); ?></li>
						<li><?php echo $this->Html->link(__('Licencias', true), '/licencias'); ?></li>
                    <?php endif; ?>
					<?php if($current_user['User']['role'] == 'administrativo_institucional_alumnos'): ?>	
						<li><?php echo $this->Html->link(__('Alumnos', true), '/alumnos'); ?></li>
						<li><?php echo $this->Html->link(__('Inscripciones', true), '/inscripcions'); ?></li>
						<li><?php echo $this->Html->link(__('Calificaciones', true), '/notas'); ?></li>
                    <?php endif;?>
					<?php if($current_user['User']['role'] == 'administrativo_institucional_inventarios'): ?>
						<li><?php echo $this->Html->link(__('Productos', true), '/productos'); ?></li>
						<li><?php echo $this->Html->link(__('Inventarios', true), '/inventarios'); ?></li>
					<?php endif;?>	
                        							
				<?php if($this->Html->loggedIn()) { ?>
                        <li><?php echo $this->Html->link(__('Cerrar Sesion', true), '/users/logout'); ?></li>
                <?php } ?>
				<?php endif;?>		
			</ul>              
		</div>
		
		<div class="left">

                 	<?php //debug($current_user); ?>
					
					</br></br><?php echo $this->Session->flash(); ?>

			</br><?php echo $content_for_layout; ?>

    	</div>	
		
		<div class="footer">
			<p>&copy; Copyright 2014 PABLO ANDRES GAY</p>
		</div>
	</div>

</body>
</html>