
<?php echo $this->Form->create('Profile', array('type' => 'file'));?>
<?php //echo $this->Html->link('List Users', array('action' => 'index'));?>
<!-- right content column-->
      		<div class="col-md-12" id="content">
                    <?php echo $this->element('header');?> 
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#0065A4;color:#eee;">Edit Profile</div>   
              	<div class="panel-body">
                    <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">  
            
<div class="container">
    	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
              <br><br>
              <br><br>
        <div class="text-center">
          <img src="http://placehold.it/400x400" alt="" class="img-rounded img-responsive" />
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-7 personal-info">
        <?php echo $this->Session->flash(); ?>
        <h2>Personal Information</h2>
        <hr>
        <div class="well well-sm">
        <br>
        <br>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Semester:</label>
            <div class="col-md-8">
              <?php echo $this->Form->input('semester', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your campus',
                                   'options' => array('first' => 'First Year', 'second' => 'Second Year', 'third' => 'Third Year' ))); ?><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Education:</label>
            <div class="col-lg-8">
                <?php
                        echo $this->Form->input('education',array(
                              'label' => false,
                              'class' => 'form-control',
                              'placeholder' => 'Education',
                              'div' => false));
                        ?><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Program Name:</label>
            <div class="col-lg-8">
                <?php //echo $this->Form->input('Program.ProgramName'); ?>
              <div class="ui-select">
                <select id="program" class="form-control">
                  
                  
                            <?php

//                                $connection = mysql_connect("localhost", "root", "");
//                                $db = mysql_select_db("rm", $connection);
//
//                                $query = "SELECT id, ProgramName FROM programs";
//                                $result = mysql_query ($query);
//                                while($r = mysql_fetch_array($result))
//                                {
//                                echo "<option value=".$r["id"].">".$r["ProgramName"]."</option>"; 
//                                }
//                                echo "</select>";
                            
                                ?>         
                </select>
                  <br>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">About Me:</label>
            <div class="col-md-8">
                        <?php
                        echo $this->Form->textarea('Profile.bio',array(
                              'label' => false,
                              'rows' => '5',
                              'class' => 'form-control input-md',
                              'placeholder' => 'Briefly describe any relevant previous work experience...',
                              'div' => false));
                        ?><br>
            </div>
          </div>
            <br><!---------------------WORK EXPERIENCE ------------------------------->

            
            <hr>
            <h3>Work and Research Experience</h3>    
        </div><!---WELL----->
            <div class="form-group">
            <label class="col-md-4 control-label">Previous Employment:</label>
            <div class="col-md-8">
              <?php
                        echo $this->Form->textarea('Profile.work_experience',array(
                              'label' => false,
                              'rows' => '5',
                              'class' => 'form-control input-md',
                              'placeholder' => 'Briefly describe any relevant previous work experience...',
                              'div' => false));
                        ?><br>
            </div>
          </div>
            <div class="form-group">
            <label class="col-md-4 control-label">Research Experience:</label>
            <div class="col-md-8">
              <?php
                        echo $this->Form->textarea('Profile.research_experience',array(
                              'label' => false,
                              'rows' => '5',
                              'class' => 'form-control',
                              'placeholder' => 'Briefly describe any relevant previous research experience...',
                              'div' => false));
                        ?><br>
            </div>
            <h3>Monster Tags</h3>
            <hr>
            <div class="form-group">
            
            <div class="well">
               <textarea class="form-control" rows="5" placeholder="Add Monster Tags to your profile..."></textarea>
            </div>
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-8">
               <?php
                        echo $this->Form->submit('Save Changes',array(
                              'class' => 'btn btn-primary',
                              'div' => false));
                        ?>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
            <br> <!---------------------MONSTER TAGS ------------------------------->
        </form>
      </div>
  </div>
</div>
<hr>
            </div><!---end of col-xs-12 col-sm-6 col-md-6--->
            <!---RSS FEED -->
        </div><!---end of row--->
    </div><!---end of no-gutter row--->            
</div><!---end of container--->   
            
             	
            </div><!--/panel-body-->
          </div><!--/panel-->
        </div><!--/end right column-->

