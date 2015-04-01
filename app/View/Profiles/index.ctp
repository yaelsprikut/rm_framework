<?php echo $this->element('header');?>
<hr class="colorgraph">
<div class="panel">
            <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Monster Profiles</div> 
            <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> View All Users
                            </li>
                            </ol>
            <div class="panel-body">
                
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-md-8">
                <h3 class="page-header">Research Monster Profiles
                    <small>George Brown College Students and Instructors</small>
                </h3>
            </div>
        </div>
        <!-- /.row -->
<?php foreach($profiles as $profile): ?>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-3">
                    <img class="img-responsive" src="http://placehold.it/200x150" alt="">
            </div>
            <div class="col-md-5">
                <h3><?php echo $profile['User']['fname'] ?>&nbsp;<?php echo $profile['User']['lname'] ?>&nbsp;<small><mark><?php echo $profile['User']['role'] ?></mark></small></h3>
                <h4><?php echo $profile['Program']['ProgramName'] ?></h4>
                <p><?php echo $profile['Profile']['bio'] ?></p>
                <?php
                echo $this->Html->link(
                    'View Profile &nbsp;<i class="fa fa-chevron-right"></i>',
                    array('controller' => 'users','action' => 'view', $profile['User']['id']),
                    array('class' => 'btn btn-primary',
                          'escape' => false));?>
            </div>
        </div>
        <hr>
        <!-- /.row -->
        <?php endforeach; ?>
        </div>
</div>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->