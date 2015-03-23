<?php $cakeDescription = __d('cake_dev', 'GBC Research Monster'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>: Dashboard
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php           
        echo $this->Html->css(array('bootstrap.min', 'styles','sb-admin', 'font-awesome.min'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
	?>
        <link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" /> 
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                                <a><img class="img-responsive" src="<?php echo $this->webroot; ?>img/gbclogo.png"  height="75" width="75"></a>
            </div>                  <a class="navbar-brand"><b>Research Monster:</b> Administrator Dashboard</a>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;Administrator <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php echo $this->Html->link('Log Out',array('admin' => false, 'controller' => 'users', 'action' => 'logout')); ?>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav"><br>
                    <li>
                        <h4>&nbsp;&nbsp;<i class="fa fa-home"></i> Administrator Panel </h4>
                    </li>
                    <li>
                      <?php
                      
                      echo $this->Html->link(
                        '<i class="fa fa-fw fa-dashboard"></i> Dashboard',
                        array(
                            'controller' => 'users',
                            'action' => 'index',
                            'admin' => true
                        ),
                        array(                           
                            'escape' => false
                        )
                    );
                      ?>
                    </li>
                    <li>
                      <?php
                      
                      echo $this->Html->link(
                        '<i class="fa fa-fw fa-user"></i> Users',
                        array(
                            'controller' => 'users',
                            'action' => 'index',
                            'admin' => true
                        ),
                        array(                           
                            'escape' => false
                        )
                    );
                      ?>
                    </li>
                    <li>
                    <?php
                      
                      echo $this->Html->link(
                        '<i class="fa fa-fw fa-tasks"></i> Profiles',
                        array(
                            'controller' => 'profiles',
                            'action' => 'index',
                            'admin' => true
                        ),
                        array(                           
                            'escape' => false
                        )
                    );
                      ?>
                    </li>
                    <li>
                        <?php
                      
                      echo $this->Html->link(
                        '<i class="fa fa-fw fa-edit"></i> Projects',
                        array(
                            'controller' => 'projects',
                            'action' => 'index',
                            'admin' => true
                        ),
                        array(                           
                            'escape' => false
                        )
                    );
                      ?>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-wrench"></i> Modify Website <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Edit About Section</a>
                            </li>
                            <li>
                                <a href="#">Create Additional Tags</a>
                            </li>
                            <li>
                                <a href="#">Add Programs</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $this->fetch('content'); ?> 

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- Morris Charts JavaScript -->


</body>
     <?php      
         echo $this->Html->script(array('jquery', 'bootstrap.min', 'scripts'));
         echo $this->fetch('script'); 
    ?>

</html>
