<?php $cakeDescription = __d('cake_dev', 'GBC Research Monster'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GBC Research Monster</title>

    <!-- Bootstrap Core CSS -->
    <?php echo $this->Html->css('bootstrap.min'); ?>

    <!-- Custom CSS -->
    <?php echo $this->Html->css('grayscale'); ?>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
 
        <?php echo $this->Html->meta( 'rmfavicon.ico', 'rmfavicon.ico', array('type' => 'icon'));?>
    

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background-color:#003366">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    &nbsp;<i class="fa fa-play-circle"></i>  <span class="light">Research</span> Monster
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Login</a><!--about-->
                    </li>
                    <li>
                        <a class="page-scroll" href="#register">Register</a><!--download-->
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a><!--contact-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login/About Section -->
    <?php echo $this->fetch('content'); ?>

    <!-- Download Section -->
    <section id="register" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Register</h2>
                    <p>If you are not yet registered with Research Monster, start here:</p>
                    <div class="col-lg-4 col-lg-offset-4">
                                        <?php
                        echo $this->Html->link('Register','../users/add', array(
                              'class' => 'btn btn-lg btn-primary btn-block',
                              'action' => 'login',
                              'div' => false));
                        ?>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact the GBC Office of Research and Innovation</h2>
                <p>Learn more about our supports for industry innovation, faculty engagement, and student learning.</p>
                <p><a href="mailto:research@georgebrown.ca">research@georgebrown.ca</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="http://www.georgebrown.ca/" class="btn btn-default btn-lg" target="_blank"><i class="glyphicon glyphicon-book"></i> <span class="network-name">George Brown College</span></a>
                    </li>
                    <li>
                        <a href="http://www.georgebrown.ca/research/" class="btn btn-default btn-lg" target="_blank"><i class="glyphicon glyphicon-bookmark"></i> <span class="network-name">Research and Innovation</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Research Monster 2015</p>
        </div>
    </footer>
     <?php      
         echo $this->Html->script(array('jquery', 'bootstrap.min', 'jquery.easing.min', 'grayscale'));
         echo $this->fetch('script'); 
    ?>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    
    

</body>

</html>
