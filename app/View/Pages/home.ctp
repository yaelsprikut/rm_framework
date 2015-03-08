<?php $cakeDescription = __d('cake_dev', 'Research Monster'); ?>
        <?php echo $this->Form->create('User'); ?>
        
		<!--sidebar went HERE -->
		<div class="col-md-6 content"> <!----cut here --->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome to Research Monster
                </div>
                <div class="panel-body">

          <div class="modal-header">
              <img class="img-responsive" src="<?php echo $this->webroot; ?>img/rmlogo.png"  height="250" width="600">
          </div>
                   
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" action="users">
                              <div class="form-group">
                                  <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
                                                          
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                             <?php
                        echo $this->Form->submit('Sign In',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> See all your orders</li>
                          <li><span class="fa fa-check text-success"></span> Shipping is always free</li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><span class="fa fa-check text-success"></span>Holiday discounts up to 30% off</li>
                      </ul>
                      <p><?php
                        echo $this->Html->link('Yes please, register now!','../users/add', array(
                              'class' => 'btn btn-info btn-block',
                              'action' => 'login',
                              'div' => false));
                        ?></p>
                  </div>
              </div>
          </div>
      
                </div>
            </div>
		</div>


