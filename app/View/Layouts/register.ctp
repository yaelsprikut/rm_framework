<?php           
                echo $this->Html->css(array('bootstrap', 'bootstrap.min','styles')); 
                echo $this->fetch('meta');
                echo $this->fetch('css');       
            ?>

<body background="<?php echo $this->webroot; ?>img/downloads-bg.jpg">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Register with <b>ResearchMonster.ca</b></h4><hr class='colorgraph'>
              <p>Please register your Research Monster account. An account validation message will be sent to your 
                  e-mail where you can confirm your registration.<br><br>
                  <b>Already a member?</b> <?php echo $this->Html->link('Login to Research Monster', '..#login'); ?>.</p>
            </div>
          
            <div class="modal-body">
              
            
                <form id="registerForm" method="POST" >
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">First Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        <br>
                        <label for="InputName">Username</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Last Name</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        <br>
                        <label for="InputPassword">Enter Password</label>
                        <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> <hr>
                </div>       
                </div> 
                
                    <div class="form-group"> 
                        <div class="col-xs-12">
                        <label for="InputEmail">Enter Email</label>
                        <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Address</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="street_name" placeholder="Enter Street Name and Number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">City</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputProvince">Province</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="province" placeholder="Enter Province" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span> 
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>                     
                   </div>
                </div>

                  <div class="form-group">
                  <div class="input-group-addon">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
                  
                  </div>
                </div>
                </form>
              </div><!---modal-body--->
          </div>
       </div>


<script type="text/javascript">

</script>
</body>
</html>