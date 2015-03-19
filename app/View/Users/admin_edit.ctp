<?php echo $this->Form->create('User');?>
<h3>Control Panel: Edit a User </h3>
        <hr>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
            </li>
            <li>
              <?php echo $this->Html->link(
                        '<i class="fa fa-fw fa-user"></i> Users',
                        array(
                            'controller' => 'users',
                            'action' => 'admin_index',
                            'admin' => true
                        ),
                        array('escape' => false)
                    );?>
            </li>
            <li class="active">
                <i class="fa fa-pencil"></i> Edit User
            </li>
        </ol>    
        <blockquote>
            The administrator can modify user with an assigned role, or assign roles to registered user 
            accounts.
        </blockquote>
<br>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>First Name</label>
                    <?php echo $this->Form->input('fname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'div' => false));
                    ?>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <?php echo $this->Form->input('lname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'div' => false));
                    ?>
                </div>
                <div class="form-group">
                    <label>E-Mail (Username)</label>
                    <?php echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'div' => false));
                    ?>
                </div>
                <div class="form-group">
                    <label>Student ID: </label>
                    <?php echo $this->Form->input('studentid',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'div' => false));
                    ?>
                </div>
                <div class="form-group">
                    <label>User Role</label>
                    <?php
                    echo $this->Form->input('role', array(
                        'options' => array(
                            'admin' => 'Admin', 
                            'student' => 'Student', 
                            'staff' => 'Staff', 
                            'research' => 'Research'),
                              'label' => false,
                              'class' => 'form-control input-md'             
                    ));                   
                    ?>
                    </div>   
                    <?php
                        echo $this->Form->submit('Modify User',array(
                              'class' => 'btn btn-md btn-primary',
                              'div' => false)); ?>
                </div>              
            </div>          
        <hr>
