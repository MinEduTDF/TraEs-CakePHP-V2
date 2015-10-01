
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- Smartphones, tablet -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ******************* -->

<?php echo $this->Html->charset(); ?>

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

<!-- ************* fastclick.js *******************-->
 		<?php echo $this->Html->script('fastclick.js'); ?>
<!-- **************************************** -->

<!-- ************* Bootstrap.js *******************-->
 		<?php echo $this->Html->script('bootstrap.min.js'); ?>
<!-- **************************************** -->

<!-- ************ Sigedu Css *********** -->
         <?php echo $this->Html->css('sigedu', 'stylesheet', array("media"=>"all" )); ?>
        <?php echo $this->Html->css('animate', 'stylesheet', array("media"=>"all" )); ?> 
<!-- ************************************** -->
<script>
	$(function() {
	    FastClick.attach(document.body);
	});
</script>

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
