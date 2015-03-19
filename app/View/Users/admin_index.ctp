<?php    
   // $program = $this->Program->find('list');
    //Debugger::dump($program);   
        
     ?>


<h3>Control Panel: Users </h3>
        <hr>
        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Users
                            </li>
        </ol>
        <div class="well">
        <p>
            This section provides a list of all registered users on Research Monster. The administrator 
            has the ability to view, modify, and delete any profile content or account information provided 
            by any user. In the event that an administrator decides to deactivate an account, a notification
            e-mail will be sent to the user.
        </p>
        <blockquote>
            The administrator can create a new user with an assigned role, or assign roles to registered user 
            accounts.
        </blockquote>
        <h4>Registered Users Database</h4>

            This section allows your to add a generic user or an administrator. It also provides a list of all
            the registered users in the Research Monster database. It also allows the administrator to view all
            recent user tasks and activities.
            <hr>
            <li><mark>View</mark> - The administrator can view user and their profile.</li>
            <li><mark>Edit</mark> - The administrator can modify any user account information.</li>
            <li><mark>Delete</mark> - The administrator can delete any user account. The profile 
                associated with the account will remain in the Research Monster archive.</li>
            
        </div>
        <br>
        <div class="row">
        <div class="col-sm-6">
         <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-user"></i> User Actions</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php echo $this->Html->link(
                                          '<i class="fa fa-fw fa-user"></i> Create a User',
                                          array(
                                              'action' => 'add',
                                              'admin' => true
                                          ),
                                          array(                           
                                              'escape' => false,
                                              'class' => 'list-group-item'
                                          ));
                                        ?>
                                    <?php echo $this->Html->link(
                                          '<i class="fa fa-fw fa-dashboard"></i> Create an Administrator',
                                          array(
                                              'action' => 'add',
                                              'admin' => true                                             
                                          ),
                                          array(                           
                                              'escape' => false,
                                              'class' => 'list-group-item'
                                          ));
                                        ?>
                                </div>                       
                            </div>
                        </div>
                    </div>
                            <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <br>
	<table class="table table-bordered table-hover table-striped">
	<tr>
			<th>User ID</th>
                        <th>User Role</th>
                        <th>First Name</th>
                        <th>Last Name</th>
			<th>Profile ID</th>
			<th>E-mail (username)</th>
                        <th>Created</th>
                        <th>Modified</th>
			<th class="actions">User Actions</th>
	</tr>
	<?php 
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
                <td><?php echo $user['User']['role']; ?>&nbsp;</td>
                <td><?php echo $user['User']['fname']; ?>&nbsp;</td>
                <td><?php echo $user['User']['lname']; ?>&nbsp;</td>
                <td><?php echo $user['Profile']['user_id']; ?></td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
                <td><?php echo $user['User']['created']; ?></td>
		<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
			<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?> -
			<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
			    <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?> -
			    <?php echo $this->Form->postLink('Delete', array('admin' => false, 'action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
		    <?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

<hr>

