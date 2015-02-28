<?php $cakeDescription = __d('cake_dev', 'Research Monster'); ?>

<html>
    <body>
        <?php include 'includes-index/navbar.php';?>
        <?php include 'includes-index/header.php';?>
        <?php echo $this->Form->create('User'); ?>
        
        <div class="container-fluid main-container">
		<div class="col-md-3 sidebar">
			<div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Navigation</div>
                <div class="panel-body">
                </div>

                <!-- List group -->
                <ul class="list-group">
                  <li class="list-group-item">Homepage</li>
                  <li class="list-group-item">News and Announcements</li>
                  <li class="list-group-item">Career Events</li>
                  <li class="list-group-item">Browse Users</li>
                  <li class="list-group-item">Browse Projects</li>
                </ul>
              </div>
		</div>
		<div class="col-md-8 content"> <!----cut here --->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Login to Research Monster
                </div>
                <div class="panel-body">
                <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-16 col-sm-8 col-md-8">  
            <div class="users form">
                		<form role="form" action="users">
                        <h2>Sign in to Research Monster <small>Login and start browsing new projects.</small></h2>
                        <hr>
                                <?php echo $this->Session->flash('auth'); ?>
                                <?php echo $this->Session->flash(); ?> 
			<fieldset>                              
				<hr class="colorgraph">
				<div class="form-group">             
                        <?php
                        echo $this->Form->input('username',array(
                              'class' => 'form-control input-lg',
                              'placeholder' => 'Username',
                              'div' => false));
                        ?>
				</div>
				<div class="form-group">
                    <?php                      
                    echo $this->Form->input('password',array(
                          'class' => 'form-control input-lg',
                          'placeholder' => 'Password',
                          'div' => false));                 
                    ?>
				</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4">
                                            
                        <?php
                        echo $this->Form->submit('Sign In',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
					</div>
				</div>
			</fieldset>
		</form>
            </div>

            </div><!---end of col-xs-12 col-sm-6 col-md-6--->
            <!---RSS FEED -->
        </div><!---end of row--->
    </div><!---end of no-gutter row--->            
</div><!---end of container--->   
                </div>
            </div>
		</div>
        </div>
    </body>

</html>
