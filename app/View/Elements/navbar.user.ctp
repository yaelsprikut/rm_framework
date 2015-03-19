<!---This navbar only appears for UNREGISTERED users--->

<!---UNREGISTERED USER NAVBAR--->

<nav class="navbar navbar-fixed-top">                
          <ul class="nav navbar-left navbar-nav"> 
            <img class="img-responsive" src="<?php echo $this->webroot; ?>img/gbclogo.png"  height="80" width="80"> 
        </ul> 
    <form class="navbar-form navbar-left">
                <a href="#menu-toggle" class="btn btn-success" id="menu-toggle"><i class="fa fa-th-list"></i><b> Toggle Menu</b></a>
            </form>  
    
            
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
        <div class="input-group">      
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i> Filter <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Profiles</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Programs</a></li>
          <li class="divider"></li>
          <li><a href="#">Monster Tags</a></li>
        </ul>   
        </div>
          <input type="text" class="form-control" placeholder="Search projects, students, teachers, tags etc.">
          <button type="submit" class="btn btn-primary">Submit</button>      
        </div>
      </form>
    
      <div class="navbar-collapse collapse">        
        <ul class="nav navbar-right navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?=$this->Session->read('Auth.User.fname')?>&nbsp;<?=$this->Session->read('Auth.User.lname')?>&nbsp;
                <i class="glyphicon glyphicon-user"></i>&nbsp;<i class="glyphicon glyphicon-chevron-down"></i>&nbsp;&nbsp;</a>
            <ul class="dropdown-menu">
              <li><a href="#">Admin</a></li>
              <li><a href="#">Privacy</a></li>
              <li class="divider"></li>
              <li><?php echo $this->Html->link('Log Out', '../users/logout'); ?></li>
             </ul>
          </li>
        </ul>
      </div>
</nav><!-- /.navbar -->