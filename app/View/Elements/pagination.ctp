<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} resultados de un total de {:count}, desde {:start} hasta {:end}')
	));
	?>
</p>

<nav>
  <ul class="pagination">
    <?php
        echo ($this->Paginator->hasPrev()) ? $this->Paginator->prev('«', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">«</a></li>';
        echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li'));   
        echo ($this->Paginator->hasNext()) ? $this->Paginator->next('»', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">»</a></li>';
    ?>
  </ul>
</nav>