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
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'student' => 'Student', 'staff' => 'Staff', 'research' => 'Research' )
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

