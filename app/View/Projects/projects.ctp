<?php echo $this->element('header');?>
<hr class="colorgraph">

<?php echo $this->Session->flash(); ?>
<?php //debug($posts); ?>
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">My Projects</div> 
    <div class='well'>
        <h3>My Created projects</h3>
    </div>
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>User ID</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
<?php if ($current_user['id'] == $project['Project']['user_id']): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td><?php echo $project['Project']['user_id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $project['Project']['title'],
                    array('action' => 'view', $project['Project']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $project['Project']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $project['Project']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $project['Project']['created']; ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>

</table>
</div>