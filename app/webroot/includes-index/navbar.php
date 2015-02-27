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
          <li><a href="index.php">Home</a></li>
          <li><a href="registration.php">Register</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
          
          <ul class="nav navbar-right navbar-nav">
            <li>
            <form class="navbar-form navbar-left" method="post" role="submit" action="index.php#login">
                <div class="form-group">  
                    <b>Already a member?  </b>         
                </div>
                <button class="btn btn-primary"><i class="glyphicon glyphicon-user"></i> Login to <b>Research Monster</b></button>
            </form>
            </li>
        </ul>
      </div>
       
    </div>
</nav><!-- /.navbar -->