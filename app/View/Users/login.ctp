<?php $cakeDescription = __d('cake_dev', 'Login to Research Monster'); ?>
    <?php echo $this->Form->create('User'); ?>
        
<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $cakeDescription ?>
    </div>
    <div class="panel-body">
        <div class='well'>
        		<form role="form">
			<fieldset>
                                <?php echo $this->Session->flash('auth'); ?>
                                <?php echo $this->Session->flash(); ?> 
				<h2>Please Sign In</h2>
				<hr>
				<div class="form-group">
                    <?php
                        echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-lg',
                              'placeholder' => 'Username',
                              'div' => false));
                        ?>
				</div>
				<div class="form-group">
                    <?php                      
                    echo $this->Form->input('password',array(
                          'label' => false,
                          'class' => 'form-control input-lg',
                          'placeholder' => 'Password',
                          'div' => false));                 
                    ?>
                                    <a href="" class="btn btn-link pull-right">Forgot Password?</a> 
                                  
				</div>
                               
                                     
                                
				<hr>
                                
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                         <?php
                        echo $this->Form->submit('Sign In',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
            </div>
    </div>
</div>