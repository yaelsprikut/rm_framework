<?php echo $this->element('header');?>
<hr class="colorgraph">
<p><?php //echo $this->Html->link('Add Project', array('action' => 'add')); ?></p>
<?php //debug($my_projects); ?>
<!-- Here's where we loop through our $posts array, printing out post info -->
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Recent Projects</div> 
            <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-tasks"></i> Projects
                            </li>
        </ol>
<div class="container">
     <!-- Page Heading -->
        <div class="row">
            <div class="col-md-8">
                <h3 class="page-header">Research Monster Projects
                    <small>Newly Posted</small>
                </h3>
            </div>
        </div>
        <!-- /.row -->
     <?php foreach ($projects as $project): ?>
        <div class="row">
            <div class="col-md-3">
                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
            </div>
            <div class="col-md-6">
                <h3><u><?php echo $project['Project']['title']; ?></u></h3>
                <h4><?php echo $project['Project']['summary']; ?></h4>
                <p><?php echo $project['Project']['description']; ?></p>
                <?php
                echo $this->Html->link(
                    'View Project &nbsp;<i class="fa fa-chevron-right"></i>',
                    array('action' => 'view', $project['Project']['id']),
                    array('class' => 'btn btn-primary',
                          'escape' => false));?>
            </div>
        </div>
    <hr>
    <?php endforeach; ?>
    </div>
</div>  