<?php echo $this->element('header');?>
<hr class="colorgraph">
<?php echo $this->Session->flash(); ?>
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Project Applicants</div> 
    <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li>
                                <i class="fa fa-briefcase"></i> My Created Projects
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Project Applicants
                            </li>
        </ol>
    <div class="panel-body">
        <?php debug($project) ?>
    </div>
</div>