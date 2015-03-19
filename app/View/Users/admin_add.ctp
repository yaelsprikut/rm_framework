<?php echo $this->Form->create('User'); ?>
<h3>Control Panel: Create a User </h3>
        <hr>
        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> Users
                            </li>
                            <li class="active">
                                <i class="fa fa-plus"></i> Create User
                            </li>
        </ol>
        <blockquote>
            The administrator can create a new user with an assigned role, or assign roles to registered user 
            accounts.
        </blockquote>
        <br>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>E-Mail (Username)</label>
                    <?php echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'E-Mail',
                              'div' => false));
                    ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <?php echo $this->Form->input('password',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Password',
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
                        echo $this->Form->submit('Create User',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false)); ?>
                </div>              
            </div>          
        <hr>

                    


