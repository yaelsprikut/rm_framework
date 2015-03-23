<h3>Control Panel: Profiles</h3>
        <hr>
        <?php echo $this->Session->flash(); ?>
        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tasks"></i> Profiles
                            </li>
        </ol>
        <div class="well">
        <p>
            This section provides a list of all registered profiles on Research Monster. The administrator 
            has the ability to view and delete any profile content provided by any user. In the 
            event that an administrator decides to deactivate a profile, a notification e-mail will be sent 
            to the user.
        </p>
        <blockquote>
            The administrator cannot create a profile, however they can view the profile content and have 
            the ability to delete any profile that is inactive or goes against the Terms of Agreement as 
            established through the George Brown College Research Department.
        </blockquote>
        <hr>
        <li><mark>View</mark> - The administrator can view any user profile.</li>
        <li><mark>Delete</mark> - The administrator can delete any user profile.</li>
        </div>
        
	<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Profile ID</th>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>        
        <th>Created</th>
        <th>Modified</th>
        <th>Profile Actions</th>
    </tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
    <?php foreach ($users as $user): ?>
    <?php //debug($profile); ?>
    <tr>
        <td><?php echo $user['Profile']['id']; ?></td>
        <td><?php echo $user['Profile']['user_id']; ?></td>
        <td><?php echo $user['User']['fname']; ?></td>
        <td><?php echo $user['User']['lname']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['Profile']['created']; ?></td>
        <td><?php echo $user['Profile']['modified']; ?></td>
        <td>
            <?php echo $this->Html->link('View', array('admin' => false, 'action' => 'view', $user['Profile']['id']));?> - 
            <?php echo $this->Form->postLink('Delete',array('admin' => false, 'action' => 'delete', $user['Profile']['id']),array('confirm' => 'Are you sure?'));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>