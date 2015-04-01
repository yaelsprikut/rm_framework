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
        <?php //debug($project) ?>
        <h3>All Applicants for this Project</h3>
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
        <th>Applicant Name</th>
        <th>Student/Staff ID</th>
        <th>E-Mail Address</th>
        <th>User Role</th>
        <th>Campus</th>
    </tr>
     
        <tr>     
        <?php foreach($project as $projects): ?>
        <td><?php echo $projects['User']['fname']; ?>&nbsp;<?php echo $projects['User']['lname']; ?></td>
        <td><?php echo $projects['User']['studentid']; ?></td>
        <td><?php echo $projects['User']['username']; ?></td>
        <td><?php echo $projects['User']['role']; ?></td>
        <td><?php echo $projects['User']['campus']; ?></td>
    </tr>
        <?php endforeach; ?>
    </table>
    </div>
</div>