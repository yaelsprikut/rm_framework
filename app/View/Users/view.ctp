<!-- File: /app/View/Users/view.ctp -->

      		<div class="col-md-12" id="content">
                    <?php echo $this->element('header');?>  
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#0065A4;color:#eee;">Personal Information</div>   
              	<div class="panel-body">
                    <?php echo $this->Session->flash(); ?>
                    <br>
                    <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-7">     
            <div class="well well-md">
                <br>   
                <!------------ STUDENT BADGE -------------------->
                <?php echo $this->element('badge.student');?> 
                
                <!------------ STUDENT NOTIFICATIONS -------------------->
                <?php echo $this->element('bar.student');?> 
                </div>
                <hr>
                  <div class="well"> 
                    <h3>Professional Summary</h3>
                    <?php echo $user['Profile']['bio']; ?>
                  </div>
                    <div> 
                        <h4>Work Experience</h4>
                        <div>
                        <?php echo $user['Profile']['work_experience']; ?>
                        </div>
                    </div>
                <hr>
                    <div>  
                        <h4>Research Experience</h4>
                        <div>
                        <?php echo $user['Profile']['research_experience']; ?>
                        </div>
                    </div>
                <hr>
                    <div class="well"> 
                    <h3>Monster Tags</h3>
                    <button class="btn btn-primary">#CSS</button>
                    <button class="btn btn-primary">#WordPress</button>
                    <button class="btn btn-primary">#PHP</button>
                    <button class="btn btn-primary">#HTML</button>
                  </div>
            </div><!---end of col-xs-12 col-sm-6 col-md-6--->
                        <?php echo $this->element('column');?> <!---RSS FEED -->
        </div><!---end of row--->
    </div><!---end of no-gutter row---> 
</div><!---end of container--->   
            
             	
            </div><!--/panel-body-->
          </div><!--/panel-->
        </div><!--/end right column-->
