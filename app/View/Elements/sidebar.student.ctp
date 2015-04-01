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
                    <?php echo $this->Html->link('Homepage', array('admin' => false, 'controller' => 'projects' , 'action' => 'index')); ?>
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
                                <?php echo $this->Html->link('Recommended Projects', array('controller' => 'projects' , 'action' => 'index')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Recently Applied', array('controller' => 'projects', 'action' => 'applied', $this->Session->read('Auth.User.id'))); ?>
                            </li>
                            <li>
                                 <?php echo $this->Html->link('Saved Projects', array('controller' => 'projects', 'action' => 'saved', $this->Session->read('Auth.User.id'))); ?>
                            </li>
                            <li>
                                View My Invitations
                            </li>
                        </ul>              
                    </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <?php echo $this->Html->link('About Us', array('controller' => 'users', 'action' => 'about')); ?>
                </li>
                <li>
                    <a href="#">Services</a>
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
    