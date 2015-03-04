<!---This navbar only appears for REGISTERED STUDENTS--->

<!---REGISTERED STUDENT NAVBAR--->

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
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Profile</a>
            <ul class="dropdown-menu">
              <li><a href="profile.php?c=1">View Profile</a></li>
              <li><a href="profile.php?c=2">Edit Profile</a></li>  
            </ul>
          </li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Projects</a>
            <ul class="dropdown-menu">
              <li><a href="projects.php?c=1">New Projects</a></li>
              <li><a href="projects.php?c=2">Browse Projects</a></li>
              <li><a href="projects.php?c=3">Recently Applied</a></li> 
            </ul>
          </li>
          <li><a href="about.php">About Us</a></li>
        </ul>          
        <ul class="nav navbar-right navbar-nav">
            <li>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">  
                    <input type="text" class="form-control" placeholder="Search projects...">            
                </div>
             <button type="submit" class="btn btn-default">Search</button>
            </form>
            </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Account</a></li>
              <li><a href="#">Privacy</a></li>
              <li class="divider"></li>
              <li><?php echo $this->Html->link('Logout', '../users/logout'); ?></li>
             </ul>
          </li>
        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->