<?php
$cakeDescription = __d('cake_dev', 'GBC Research Monster');
?>
<!DOCTYPE html>
<html>
    <head>
            <?php echo $this->Html->charset(); ?>
            <title>
                <?php echo $cakeDescription ?>:
                <?php echo $this->fetch('title'); ?> Homepage
            </title>
            <?php           
                echo $this->Html->css(array('bootstrap', 'bootstrap.min', 'styles'));
                echo $this->fetch('meta');
                echo $this->fetch('css');       
            ?>
        <link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" />    
    </head>

    <body> <!--- default layout settings -->
        <?php echo $this->element('navbar');?> 
        <?php echo $this->element('header');?>
        <div class="container-fluid main-container"> <!--Contains the three essential modules -->
            <?php echo $this->element('sidebar.left');?>
            <?php echo $this->fetch('content'); ?>  <!--content of the page -->
            <?php echo $this->element('sidebar.right');?>                    
            <?php echo $this->element('sql_dump'); ?>       
        </div><!--End of essential modules-->   
    </body>
    
<footer>
    <?php echo $this->element('footer');?>
</footer>

    <?php    
        //scripts
         echo $this->Html->script(array('jquery', 'bootstrap.min', 'scripts'));
         echo $this->fetch('script'); 
    ?>
</html>
