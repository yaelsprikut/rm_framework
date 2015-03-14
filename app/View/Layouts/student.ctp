<?php $cakeDescription = __d('cake_dev', 'GBC Research Monster'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
            <?php echo $this->Html->charset(); ?>
            <title>
                <?php echo $cakeDescription ?>
                <?php echo $this->fetch('title'); ?>: Homepage
            </title>
            <?php           
                echo $this->Html->css(array('bootstrap', 'bootstrap.min', 'simple-sidebar', 'styles', 'font-awesome.min')); 
                echo $this->fetch('meta');
                echo $this->fetch('css');       
            ?>
        
        <link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" />
<!--        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
</head>

<body>
<?php echo $this->element('navbar.user');?> 
<?php echo $this->element('sidebar.student');?> 

      <?php      
         echo $this->Html->script(array('jquery', 'bootstrap.min', 'scripts'));
         echo $this->fetch('script'); 
    ?>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
<?php echo $this->element('footer');?> 
</html>
