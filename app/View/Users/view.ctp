<!-- File: /app/View/Users/view.ctp -->


<?=$this->Session->read('Auth.User.id')?>&nbsp;

<!-- right content column-->
      		<div class="col-md-10" id="content">
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#001e31;color:#eee;">Personal Information</div>   
              	<div class="panel-body">
                    <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">  
            
            <div class="well well-md">
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
                        <h3>Work Experience</h3>
                        <div>
                        <?php echo $user['Profile']['workexperience']; ?>
                        </div>
                    </div>
                <hr>
                    <div> 
                        <h3>Research Experience</h3>
                        <?php echo $user['Profile']['researchexperience']; ?>
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
            <!---RSS FEED -->
            <?php echo $this->element('column');?> 
        </div><!---end of row--->
    </div><!---end of no-gutter row--->            
</div><!---end of container--->   
            
             	
            </div><!--/panel-body-->
          </div><!--/panel-->
        </div><!--/end right column-->
