<?php echo $this->element('header');?>
<hr class="colorgraph">
<?php echo $this->Session->flash(); ?>
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Saved Projects</div> 
    <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-save"></i> Saved Projects
                            </li>
        </ol>
    <div class="panel-body">
    <div>
        <h3>My Saved Projects</h3>
        <p>
            Hey <?php echo $current_user['fname']; ?>. Here you can view all of the research projects to which you have 
            applied. You can visit the research project page to review your application. 
        </p>
        <p>
         <blockquote><i class="fa fa-pencil"></i>
           <mark>Research Monster Tip:</mark> You can update or delete any outstanding applications here. 
           The Research Department will receive a notification of your application and will contact you
           by e-mail within a few days.
        </blockquote>   
        </p>
    </div>
<table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id</th>
        <th>User ID</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
<?php //debug($applied); ?>
    <?php foreach ($projects as $project): ?>
<?php if ($current_user['id'] == $project['ProjectSave']['user_id']): ?>
    <tr>
      
        <td><?php echo $project['ProjectSave']['project_id']; ?></td>
        <td><?php echo $project['ProjectSave']['user_id']; ?></td>
        <td> <?php
                echo $this->Html->link(
                    $project['Project']['title'],
                    array('controller' => 'projects','action' => 'view', $project['Project']['id'])
                );
            ?></td>
        <td><?php //debug($project); ?>   </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>
   
    
</table>
        </div>
</div>