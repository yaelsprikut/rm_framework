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
                        <a href="javascript:;" data-toggle="collapse" data-target="#profile"> <b>My Profile </b><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="profile" class="collapse">
                            <li>
                                <?php echo $this->Html->link('View Profile', array('controller' => 'users' , 'action' => 'view', $current_user['id'])); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Edit Profile', array('controller' => 'profiles', 'action' => 'edit', $current_user['Profile']['id']));?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Manage Your Account', array('controller' => 'users', 'action' => 'edit', $current_user['id']));?>
                            </li>
                        </ul>
                               
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#projects"> <b>My Projects</b> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="projects" class="collapse">
                            <li>
                                <?php echo $this->Html->link('Recommended Projects', array('controller' => 'posts' , 'action' => 'index')); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Recently Applied', array('controller' => 'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?>
                            </li>
                        </ul>              
                    </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
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
                        <?php echo $this->element('sql_dump'); ?>
                        <br>
                        
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        
                    </div>
                </div>
           
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    