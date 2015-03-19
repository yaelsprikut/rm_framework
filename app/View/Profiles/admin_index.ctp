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
            has the ability to view, modify, and delete any profile content provided by any user. In the 
            event that an administrator decides to deactivate a profile, a notification e-mail will be sent 
            to the user.
        </p>
        <blockquote>
            The administrator cannot create a profile, however they can make modifications to user accounts.
        </blockquote>
        <hr>
        <li><mark>View</mark> - The administrator can view any user profile.</li>
        <li><mark>Edit</mark> - The administrator can modify any user profile information.</li>
        <li><mark>Delete</mark> - The administrator can delete any user profile. The profile 
                associated with the user account will remain in the Research Monster archive.</li>
        </div>
        
	<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Profile ID</th>
        <th>User ID</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Profile Actions</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->


    <?php foreach ($profiles as $profile): ?>
    <?php //debug($profile); ?>
    <tr>
        <td><?php echo $profile['Profile']['id']; ?></td>
        <td><?php echo $profile['Profile']['user_id']; ?></td>
        <td><?php echo $profile['Profile']['created']; ?></td>
        <td><?php echo $profile['Profile']['modified']; ?></td>
        <td>
            <?php echo $this->Html->link('View', array('action' => 'edit', $profile['Profile']['id']));?> - 
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $profile['Profile']['id']));?> -
            <?php echo $this->Form->postLink('Delete',array('admin' => false, 'action' => 'delete', $profile['Profile']['id']),array('confirm' => 'Are you sure?'));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>