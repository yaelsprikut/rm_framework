<?php echo $this->Form->create('User'); ?>
<!-- Login/About Section -->
    <section id="login" class="container content-section text-center">
        <div class="row"> 
            <div class="col-lg-4 col-lg-offset-4">
                <?php //echo $this->Session->flash('auth'); ?>
                <?php echo $this->Session->flash(); ?>
                <img class="img-responsive" src="<?php echo $this->webroot; ?>img/rmlogo.png"  height="100" width="358">
                <hr>
            <form class="form-signin" method='POST' action="#login">
<!----------------------The login form action displays error message ---------------------->
                <h2 class="form-signin-heading">Please sign in</h2> 
                <?php
                        echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Username',
                              'div' => false));
                        ?>
                <br>
                <?php                      
                    echo $this->Form->input('password',array(
                          'label' => false,
                          'class' => 'form-control input-md',
                          'placeholder' => 'Password',
                          'div' => false));                 
                    ?>
                <div class="checkbox">
                  <label>
                 <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <?php
                        echo $this->Form->submit('Sign In',array(
                              'class' => 'btn btn-lg btn-primary btn-block',
                              'div' => false));
                        ?>
              
            </form>
            </div>
        </div>
    </section>