<?php echo $this->element('header');?>
<hr class="colorgraph">

<?php echo $this->Session->flash(); ?>
<?php //debug($posts); ?>
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">My Projects</div> 
    <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-briefcase"></i> My Created Projects
                            </li>
        </ol>
    <div class="panel-body">
        <h3>My Created Projects</h3>
        <p>
            Hey <?php echo $current_user['fname']; ?>. Here you can view all of the research projects which you have
            created. You can view a detailed table of all the applicants which is linked to their Research Monster
            profile. You can also make modifications to your posting at any time.
        </p>

         <blockquote><i class="fa fa-pencil"></i>
           <mark>Research Monster Tip:</mark> You can update or delete any outstanding projects here. 
           Only the author of the project can make any modifications to each posted project.
        </blockquote>  
    
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Project ID</th>
        <th>Author ID</th>
        <th>Project Title</th>
        <th>Actions</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($projects as $project): ?>
<?php if ($current_user['id'] == $project['Project']['create_id']): ?>
    <tr>
        <td><?php echo $project['Project']['id']; ?></td>
        <td><?php echo $project['Project']['create_id']; ?></td>
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
        <td>
            <?php echo $project['Project']['modified']; ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>

</table>
        </div>
</div>