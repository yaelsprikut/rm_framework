<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

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
    <?php if ($current_user['role'] == 'student'){
        include 'student/navbar.php';
        }else if ($current_user['role'] == 'staff'){      
            include 'teacher/navbar.php';      
        }else if($current_user['role'] == 'admin'){
            include 'admin/navbar.php'; 
        }else{
            include 'includes-index/navbar.php'; 
        }
          ?>
    <?php include 'includes-index/header.php';?>
    <?php if ($current_user['role'] == 'admin'){
        include 'admin/sidebar.php';
    }else{
        include 'includes/sidebar.php';
    }
    ?>
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
