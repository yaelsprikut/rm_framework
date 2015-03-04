<!---This navbar only appears for ADMINS--->

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
          <li><a href="home.php">Home</a></li>
          <li class="dropdown">
            <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">View User Accounts</a>
            <ul class="dropdown-menu">
              <li><a href="profile.php?c=1">Search User Accounts</a></li> 
            </ul>
          </li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">View Existing Projects</a>
          </li>
          <li><a href="about.php">Modify About Us</a></li>
        </ul>          
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Admin</a></li>
              <li><a href="#">Privacy</a></li>
              <li class="divider"></li>
              <li><?php echo $this->Html->link('Logout', '../users/logout'); ?></li>
             </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->