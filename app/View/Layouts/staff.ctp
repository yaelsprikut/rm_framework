<?php
$cakeDescription = __d('cake_dev', 'GBC Research Monster');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php           
        //echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('styles');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
	?>
        <link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" />    
</head>
<body> <!--- default layout settings -->
    <?php include 'teacher/navbar.php';?>
    <?php include 'includes-index/header.php';?>
    <?php include 'includes/sidebar.php'; ?>
    
			<?php echo $this->fetch('content'); ?>                       		
        
                        <?php echo $this->element('sql_dump'); ?>
</body>
<footer>
    <?php include 'includes/footer.php';?>
</footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
</html>
