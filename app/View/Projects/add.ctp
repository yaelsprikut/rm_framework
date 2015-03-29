<?php
echo $this->Form->create('Project');
//echo $this->Form->input('title');
//echo $this->Form->input('summary');
//echo $this->Form->input('description', array('rows' => '3'));
//echo $this->Form->input('about');
//echo $this->Form->end('Save Post');
?>

	
<div class="col-md-12" id="content">
    <?php echo $this->element('header');?> 
    <hr class="colorgraph">
        <div class="panel">
            <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Create Project</div> 
            <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="">Research Monster</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Create Project
                            </li>
                            </ol>
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
    <div class="row">
      <!-- edit form column -->
      <div class="col-md-7 personal-info">
        <?php echo $this->Session->flash(); ?>
          <h3>Project Information</h3>
          <hr>
          <blockquote><i class="fa fa-pencil"></i>
           <mark>Research Monster Tip:</mark> You can add any project information here. You'll be able to view all applicants
           that are interested in this posting, and will be able to view profiles and contact any potential candidates.
        </blockquote>
        <br>
        <br>
        <div class="form-group">
            <label class="col-lg-3 control-label">E-Mail:</label>
            <div class="col-md-8">
              <?php echo $this->Form->input('title', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Project Title'));
                                   ?><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Summary:</label>
            <div class="col-lg-8">
                <?php
                        echo $this->Form->input('summary',array(
                              'label' => false,
                              'class' => 'form-control',
                              'placeholder' => 'One-Line Summary',
                              'div' => false));
                        ?><br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Assoc. Program:</label>
            <div class="col-lg-8">
                <?php //echo $this->Form->input('Program.ProgramName'); ?>
              <div class="ui-select">
             <?php echo $this->Form->input('program_id', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your program',
                                   'options' => array('Please select a program...' => $programs))); ?>
                  <br>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Description:</label>
            <div class="col-md-8">
                        <?php
                        echo $this->Form->textarea('description',array(
                              'label' => false,
                              'rows' => '5',
                              'class' => 'form-control input-md',
                              'placeholder' => 'Give a brief description of the research project...',
                              'div' => false));
                        ?><br>
            </div>
          </div>
            <br><!---------------------WORK EXPERIENCE ------------------------------->
            <h3>Work and Experience</h3>
            <hr>
            
            <div class="form-group">
            <label class="col-md-4 control-label">About the Company:</label>
            <div class="col-md-7">
              <?php
                        echo $this->Form->textarea('about',array(
                              'label' => false,
                              'rows' => '5',
                              'class' => 'form-control input-md',
                              'placeholder' => 'Give a brief description about the company...',
                              'div' => false));
                        ?><br>
            </div>
          </div>
            <div class="form-group">
            <h3>Monster Tags</h3>
            <hr>
            <div class="form-group">
            
               <textarea class="form-control" rows="5" placeholder="Add Monster Tags to your profile..."></textarea>
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
            <br>
            <!---------------------MONSTER TAGS ------------------------------->
      </div>
    </div><!----row--->
</div><!----well--->
  </div>
</div>
            <br>
            </div><!---end of col-xs-12 col-sm-6 col-md-6--->
            <!---RSS FEED -->
        </div><!---end of row--->
    </div><!---end of no-gutter row--->            
</div><!---end of container--->   
            
             	
            </div><!--/panel-body-->
          </div><!--/panel-->