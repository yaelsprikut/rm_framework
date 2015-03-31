<?php echo $this->element('header');?> 
<hr class="colorgraph">
<?php echo $this->Session->flash(); ?>
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Project Posting</div>
<div class="container">
        <div class="row">
            <div class="col-sm-8">
<?php //debug($project) ?>
                <!-- Blog Post -->

                <!-- Title -->
                <h3><?php echo $project['Project']['title']; ?></h3>

                <!-- Author -->
                <h5>
                    by <a href="#">Industry Partner</a>
                </h5>
               <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $project['Project']['created']; ?></p>
                <p><span class="glyphicon glyphicon-book"></span> <b>Associated Program:</b> <?php echo $project['Program']['ProgramName']; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/800x200" alt="">
                <br>
                <!-- Post Content -->
                <h4>Project Summary</h4>
                <p><?php echo $project['Project']['summary']; ?></p>
                <hr>
                <h4>Description</h4>
                <p><?php echo $project['Project']['description']; ?></p>
                <br>
                <h4>About the Industry Partner</h4>
                <p><?php echo $project['Project']['about']; ?></p>
                <hr>
                 <div class="well"> 
                    <h4>Monster Tags</h4>
                    <hr>
                    <button class="btn btn-primary">#CSS</button>
                    <button class="btn btn-primary">#WordPress</button>
                    <button class="btn btn-primary">#PHP</button>
                    <button class="btn btn-primary">#HTML</button>
                  </div>
            <br>
            <blockquote>
                If you are interested in this project,
                you are able to apply for it now or save it to view it at a later time.</blockquote>
            <p align='center'>
            <?php
                echo $this->Html->link(
                    'Apply Now &nbsp;<i class="fa fa-check"></i>',
                    array('action' => 'apply', '?' =>array('project'=>$project['Project']['id'],'user'=>$current_user['id'])),
                    array('class' => 'btn btn-success',
                          'escape' => false));?>
            <?php
                echo $this->Html->link(
                    'Add to Saved Projects &nbsp;<i class="fa fa-plus"></i>',
                    array('action' => 'saveProject', '?' =>array('project'=>$project['Project']['id'],'user'=>$current_user['id'])),
                    array('class' => 'btn btn-info',
                          'escape' => false));?>
                </p>
            <br>
            <br>
            </div>
            <br>
            <?php echo $this->element('column');?>
        </div>
    </div>
    <br>
</div>