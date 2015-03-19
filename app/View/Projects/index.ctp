<!-- File: /app/View/Posts/index.ctp -->

<h1>Projects</h1>
<p><?php echo $this->Html->link('Add Project', array('action' => 'add')); ?></p>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
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
    <?php endforeach; ?>

</table>