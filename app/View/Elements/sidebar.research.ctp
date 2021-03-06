<div id="wrapper">   
            <br>
            <br>
      <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <br>
                <li class="sidebar-brand">
                    <a href="">
                        <b><?=$this->Session->read('Auth.User.fname')?>&nbsp;<?=$this->Session->read('Auth.User.lname')?></b>
                    </a>
                </li>
                <li>
                     <?php echo $this->Html->link('Homepage', array('admin' => false, 'controller' => 'projects' , 'action' => 'projects')); ?>
                </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#profile"><i class="glyphicon glyphicon-user"></i>&nbsp;<b> My Profile </b><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="profile" class="collapse">
                            <li>
                                <?php echo $this->Html->link('View Profile', array('admin' => false, 'controller' => 'users' , 'action' => 'view', $current_user['id'])); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Edit Profile', array('admin' => false, 'controller' => 'users', 'action' => 'edit', $current_user['id']));?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Manage Your Account', array('admin' => false, 'controller' => 'users', 'action' => 'edit', $current_user['id']));?>
                            </li>
                        </ul>
                               
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#projects"><i class="glyphicon glyphicon-tasks"></i>&nbsp; <b>My Projects</b> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="projects" class="collapse">
                            <li>
                                <?php echo $this->Html->link('View All Projects', array('controller' => 'projects' , 'action' => 'index')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('View My Projects', array('controller' => 'projects' , 'action' => 'projects')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Create a Project', array('controller' => 'projects', 'action' => 'add')); ?>
                            </li>
                        </ul>              
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="glyphicon glyphicon-education"></i>&nbsp; <b>Monster Users</b> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users" class="collapse">
                            <li>
                                <?php echo $this->Html->link('View All Users', array('controller' => 'profiles' , 'action' => 'index')); ?>
                            </li>
                        </ul>              
                    </li>
                <li>
                     <?php echo $this->Html->link('About Us', array('controller' => 'users', 'action' => 'about')); ?>
                </li>
                <li>
                    <h4><?=$this->Session->read('Auth.Profile.user_id')?></h4>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->              
        <div id="page-content-wrapper">  
                <div class="row">
                    <div class="col-sm-12">
                        <?php echo $this->fetch('content'); ?>
                        <?php //echo $this->element('sql_dump'); ?>
                        <br>
                        
                    </div>
                </div>
           
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    