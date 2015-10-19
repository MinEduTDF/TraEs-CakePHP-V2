<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} resultados de un total de {:count}, desde {:start} hasta {:end}')
	));
	?>
</p>
<nav>
	<ul class="pagination">
		<li> <?php echo $this->Paginator->prev('<< anterior', array('tag' => false), null, array('class' => 'disabled')); ?> </li>
		<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
		<li> <?php echo $this->Paginator->next('siguiente >>', array('tag' => false), null, array('class' => 'disabled')); ?> </li>
	</ul>
</nav>