<!---This navbar only appears for UNREGISTERED users--->

<!---UNREGISTERED USER NAVBAR--->

<nav class="navbar navbar-static">
   <div class="container">
    <div class="navbar-header">
        <a href="http://www.georgebrown.ca/"><img class="img-responsive" src="<?php echo $this->webroot; ?>img/gbclogo.png"  height="80" width="80"></a>
      
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">  
          <li><?php echo $this->Html->link('Home', '../'); ?></li>
          <li><?php echo $this->Html->link('Register', '../users/add'); ?></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
          
          <ul class="nav navbar-right navbar-nav">
            <li>
            <form class="navbar-form navbar-left">
                <div class="form-group">  
                    <b>Already a member?  </b>         
                </div>
                <?php
                        echo $this->Html->link('Login to Research Monster','../users/login', array(
                              'class' => 'btn btn-primary',
                              'action' => 'login',
                              'div' => false));
                        ?>
            </form>
            </li>
        </ul>
      </div>
       
    </div>
</nav><!-- /.navbar -->