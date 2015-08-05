
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--        <?php echo $this->Html->css('internet_services', 'stylesheet', array("media"=>"all" ));?>  -->

<!-- ************ Bootstrap Css *********** -->
        <?php echo $this->Html->css('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'); ?>
        <?php echo $this->Html->css('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'); ?>
<!-- ************************************** -->

<!-- ************* Jquery.js *******************-->
 		<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'); ?>
  		<?php echo $this->Html->script('https://code.jquery.com/ui/1.11.1/jquery-ui.js'); ?>
  		<?php echo $this->Html->css('https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'); ?>
<!-- **************************************** -->

<!-- ************* Bootstrap.js *******************-->
 		<?php echo $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'); ?>
<!-- **************************************** -->

<!-- ************ Sigedu Css *********** -->
         <?php echo $this->Html->css('sigedu', 'stylesheet', array("media"=>"all" )); ?>
        <?php echo $this->Html->css('animate', 'stylesheet', array("media"=>"all" )); ?> 
<!-- ************************************** -->

		<title>S.I.G.E.D.U_TDF</title>
</head>
<body>
	<div class="content">


<!-- ******* menu principal ******* -->
<?php 
	 if(!$this->Html->loggedIn()) { 
			echo $this->element('menu');
			
	 }
?>
<!-- ******************************* -->

<?php echo $scripts_for_layout;?>

		<div id="bg" class="animated fadeIn"></div>			
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
		<br>
		<div class="footer">
			<p>&copy; Copyright 2014 PABLO ANDRES GAY</p>
		</div>
	</div>

</body>
</html>
