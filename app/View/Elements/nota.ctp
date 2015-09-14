<div class="col-md-6">
		<div class="unit">

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Alumno:</b> <?php echo ($this->Html->link($nota['Alumno']['nombre_completo_alumno'], array('controller' => 'alumnos', 'action' => 'view', $nota['Alumno']['id']))); ?></span><br/>

		       <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Ciclo: </b> <?php echo ($this->Html->link($nota['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $nota['Ciclo']['id']))); ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Materia: </b> <?php echo ($this->Html->link($nota['Materia']['alia'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id']))); ?></span><br/>

<!--<h2>Primer período</h2>
               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Primer nota: </b> <?php echo $nota['Nota']['nota_uno_primer_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Segunda nota: </b> <?php echo $nota['Nota']['nota_dos_primer_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tercer nota: </b> <?php echo $nota['Nota']['nota_tres_primer_periodo']; ?></span><br/>-->

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 1º Período: </b> <?php echo $nota['Nota']['promedio_primer_periodo']; ?></span><br/>

<!--<h2>Segundo período</h2>
               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Primer nota: </b> <?php echo $nota['Nota']['nota_uno_segundo_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Segunda nota: </b> <?php echo $nota['Nota']['nota_dos_segundo_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tercer nota: </b> <?php echo $nota['Nota']['nota_tres_segundo_periodo']; ?></span><br/>-->

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 2º Período: </b> <?php echo $nota['Nota']['promedio_segundo_periodo']; ?></span><br/>

<!--<h2>Tercer período</h2>
               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Primer nota: </b> <?php echo $nota['Nota']['nota_uno_tercer_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Segunda nota: </b> <?php echo $nota['Nota']['nota_dos_tercer_periodo']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Tercer nota: </b> <?php echo $nota['Nota']['nota_tres_tercer_periodo']; ?></span><br/>-->

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio 3º Período: </b> <?php echo $nota['Nota']['promedio_tercer_periodo']; ?></span><br/>
               
               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio a Término: </b> <?php echo $nota['Nota']['promedio_a_termino']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Nota / Examen Diciembre: </b> <?php echo $nota['Nota']['nota_en_diciembre']; ?></span><br/>

               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Nota / Examen Marzo: </b> <?php echo $nota['Nota']['nota_en_marzo']; ?></span><br/>
                 
               <span class="name"><span class="glyphicon glyphicon-info-sign"></span> <b>Promedio Final: </b> <?php echo $nota['Nota']['promedio_final']; ?></span><br/>

		       <div class="text-right">
			   <span class="link"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $nota['Nota']['id']), array('class' => 'btn btn-danger')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'notas', 'action' => 'view', $nota['Nota']['id']), array('class' => 'btn btn-success')); ?></span>
			   </div>
		</div>
</div>