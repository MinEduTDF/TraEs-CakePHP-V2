
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- ************ Bootstrap Css *********** -->
        <?php echo $this->Html->css('bootstrap.css'); ?>
        <?php echo $this->Html->css('bootstrap.min.css'); ?>
        <?php echo $this->Html->css('bootstrap-theme.min.css'); ?>
<!-- ************************************** -->

<!-- ************* Jquery.js *******************-->
 		<?php echo $this->Html->script('jquery.min.js'); ?>
  		<?php echo $this->Html->script('jquery-ui.js'); ?>
  		<?php echo $this->Html->css('jquery-ui.css'); ?>
<!-- **************************************** -->

<!-- ************* Bootstrap.js *******************-->
 		<?php echo $this->Html->script('bootstrap.min.js'); ?>
<!-- **************************************** -->

<!-- ************ Sigedu Css *********** -->
         <?php echo $this->Html->css('sigedu', 'stylesheet', array("media"=>"all" )); ?>
        <?php echo $this->Html->css('animate', 'stylesheet', array("media"=>"all" )); ?> 
<!-- ************************************** -->


		<title>SIGIedu_TDF</title>
</head>
<body>
	<div class="content">

<!-- ******* menu principal ******* -->
<?php 
	 if($this->Html->loggedIn()) { 
			echo $this->element('menu');
	 }
?>
<!-- ******************************* -->

<?php echo $scripts_for_layout;?>

		<div id="bg" class="animated fadeIn"></div>			
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
		
	</div><br>
		<div class="footer">
			<p>&copy;GNU General Public license</p>
		</div>

</body>
</html>
