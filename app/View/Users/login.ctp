<?php $cakeDescription = __d('cake_dev', 'Research Monster'); ?>

<html>
    <body>
        <?php include 'includes-index/navbar.php';?>
        <?php include 'includes-index/header.php';?>

        
        <div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
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
                    Registration Form
                </div>
                <div class="panel-body">
                                       <div class="container">
                <div class="no-gutter row">           
        <div class="row">
        <div class="col-xs-16 col-sm-8 col-md-8">  
            
                		<form role="form">
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Forgot Password?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>


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
