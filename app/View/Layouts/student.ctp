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
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('styles');
        echo $this->fetch('meta');
        echo $this->fetch('css');
	?>
        <link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" />    
</head>
<body> <!--- default layout settings -->
    <?php echo $this->element('navbar.student');?> 
    <?php echo $this->element('header');?>
    <?php echo $this->element('sidebar');?>
    


			<?php echo $this->fetch('content'); ?>  
                        
                        <?php echo $this->element('sql_dump'); ?>

</body>
<footer>
    <?php echo $this->element('footer');?>
        <?php      
         echo $this->Html->script('jquery');
         echo $this->Html->script('bootstrap.min');
         echo $this->Html->script('scripts');
         echo $this->fetch('script'); 
        ?>
</footer>

</html>
