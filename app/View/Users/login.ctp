<?php $cakeDescription = __d('cake_dev', 'Research Monster'); ?>
        <?php echo $this->Form->create('User'); ?>
        <div class="container-fluid main-container">
		<!--sidebar went HERE -->
		<div class="col-md-6 content"> <!----cut here --->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Login to Research Monster
                </div>
                <div class="panel-body">
                <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-16 col-sm-8 col-md-6">  
            <div class="users form">
                <div class="well">
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

            </div> <!---RSS FEED -->
        </div><!---end of row--->
    </div><!---end of no-gutter row--->            
</div><!---end of container--->   
                </div>
            </div>
		</div>
        </div>

