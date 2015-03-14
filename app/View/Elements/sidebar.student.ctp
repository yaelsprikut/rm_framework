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
                                <?php echo $this->Html->link('View Profile', array('controller' => 'users' , 'action' => 'view', $this->Session->read('Auth.User.id'))); ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?>
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
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->              
        <div id="page-content-wrapper">  
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $this->element('header');?> 
                        <?php echo $this->fetch('content'); ?>
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        
                    </div>
                </div>
           
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    