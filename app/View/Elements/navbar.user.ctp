<!---This navbar only appears for UNREGISTERED users--->

<!---UNREGISTERED USER NAVBAR--->

<nav class="navbar navbar-fixed-top">                
          <ul class="nav navbar-left navbar-nav"> 
            <img class="img-responsive" src="<?php echo $this->webroot; ?>img/gbclogo.png"  height="80" width="80"> 
        </ul> 
    <form class="navbar-form navbar-left">
                <a href="#menu-toggle" class="btn btn-success" id="menu-toggle"><i class="fa fa-th-list"></i><b> Toggle Menu</b></a>
            </form>  
    <div class="container">
            
              <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Search projects, students, teachers, etc.">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <div class="navbar-collapse collapse">  
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Admin</a></li>
              <li><a href="#">Privacy</a></li>
              <li class="divider"></li>
              <li><?php echo $this->Html->link('Log Out', '../users/logout'); ?></li>
             </ul>
          </li>
        </ul>
      </div>
       
    </div>
</nav><!-- /.navbar -->