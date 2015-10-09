
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); 
?>


<!-- Smartphones, tablet -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,  minimum-scale=1.0, maximum-scale=1.0, initial-scale=no">
<!-- ******************* -->

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

<!-- ************* fastclick.js *******************-->
 		<?php echo $this->Html->script('fastclick.js'); ?>
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
<script>
	$(function() {
	    FastClick.attach(document.body);
	});
</script>
<?php echo $scripts_for_layout;?>

		<div id="bg" class="animated fadeIn"></div>			
					<?php echo $this->Session->flash(); ?>
					<?php echo $content_for_layout; ?>
		
	</div><br>
		<div class="footer">
			<p><?php echo $this->Html->link('License  Creative Commons: by-nc-sa', 'http://creativecommons.org/licenses/by-nc-sa/3.0'); ?> </p>
		</div>

</body>
</html>
