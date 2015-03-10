<!-- Login/About Section -->
    <section id="login" class="container content-section text-center">
        <div class="row"> 
            <div class="col-lg-4 col-lg-offset-4">
                <?php //echo $errorMsg; ?>
                <img class="img-responsive" src="<?php echo $this->webroot; ?>img/rmlogo.png"  height="100" width="358">
                <hr>
            <form class="form-signin" method='POST' action="index.php#login">
<!----------------------The login form action displays error message ---------------------->
                <h2 class="form-signin-heading">Please sign in</h2>
                
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name='username' class="form-control" placeholder="Email address" required>
                <br>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name='password' class="form-control" placeholder="Password" required>
                <div class="checkbox">
                  <label>
                 <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" name='submit' type="submit">Sign in</button>
            </form>
            </div>
        </div>
    </section>