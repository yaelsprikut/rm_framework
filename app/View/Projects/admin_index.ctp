<h3>Control Panel: Projects</h3>
        <hr>
        <?php echo $this->Session->flash(); ?>
        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Projects
                            </li>
        </ol>
        <div class="well">
        <p>
            This section provides a list of all posted projects on Research Monster. The administrator 
            has the ability to view and delete any project content provided by a "research" role user. In the 
            event that an administrator decides to deactivate a profile, a notification e-mail will be sent 
            to the user.
        </p>
        <blockquote>
            The administrator cannot create a project, however they can view the project content and have 
            the ability to delete any project that is inactive or goes against the Terms of Agreement as 
            established through the George Brown College Research Department.
        </blockquote>
        <hr>
        <li><mark>View</mark> - The administrator can view any user project.</li>
        <li><mark>Delete</mark> - The administrator can delete any project.</li>
        </div>
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $project['Project']['title'],
                    array('admin' => false, 'action' => 'view', $project['Project']['id'])
                );
            ?>
        </td>
        <td>
             <?php echo $this->Form->postLink('View', array('admin' => false, 'action' => 'view', $project['Project']['id']));?> -
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $project['Project']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
        <td><?php echo $project['Project']['created']; ?></td>
        <td><?php echo $project['Project']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>