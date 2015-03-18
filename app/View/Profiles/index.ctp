<!-- File: /app/View/Posts/index.ctp -->
<h1>Profiles</h1>
<p><?php echo $this->Html->link('Add Profile', array('action' => 'add')); ?></p>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>user_id</th>
        <th>Bio</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->


    <?php foreach ($profiles as $profile): ?>
    <?php //debug($profile); ?>
    <tr>
        <td><?php echo $profile['Profile']['id']; ?></td>
        <td><?php echo $profile['Profile']['user_id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $profile['Profile']['bio'],
                    array('action' => 'view', $profile['Profile']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $profile['Profile']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $profile['Profile']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $profile['Profile']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>