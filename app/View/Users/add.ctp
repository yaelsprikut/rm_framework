<?php $cakeDescription = __d('cake_dev', 'Research Monster');
if($current_user['role'] == 'admin'){
    $this->layout = 'admin'; 
}else{
    $this->layout = 'register'; 
}      
 ?>
    <?php echo $this->Form->create('User');
          
    ?>

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Student</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Teacher</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Research Office</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
         <form id="student" method="POST" >
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">First Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('fname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'First Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        <br>
                        <label for="InputName">Student ID</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('studentid',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Student ID',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> 
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Last Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('lname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Last Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        <br>
                        <label for="InputPassword">Enter Password</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('password',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Password',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        <!--------------------------------------separator---------------------------------------------------------------> <br>
                </div>       
                    </div> 
                    <div class="form-group"> 
                        <div class="col-xs-12">
                            <label for="InputEmail">Enter Email</label><small> <mark>(This will be used as your login username.)</mark></small>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'E-Mail',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Select Your Program</label>
                        <div class="input-group">
                        <?php echo $this->Form->input('program_id', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your program',
                                   'options' => array('Please select a program...' => $programs))); ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Select Your Campus</label>
                        <div class="input-group">
                       <?php echo $this->Form->input('campus', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your campus',
                                   'options' => array('St. James' => 'St. James', 'Casa Loma' => 'Casa Loma', 'Waterfront' => 'Waterfront' ))); ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">User Role</label>
                        <div class="input-group">
                      <?php
                        echo $this->Form->input('role', array(
                        'options' => array(                    
                        'student' => 'Student' 
                            ),
                              'label' => false,
                              'class' => 'form-control input-md'             
                    ));                   
                    ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                  <div class="form-group">
                                <?php
                        echo $this->Form->submit('Register',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
                  </div>
        </form>
    
    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile">
         <form id="student" method="POST" >
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">First Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('fname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'First Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        <br>
                        <label for="InputName">Employee ID</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('studentid',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Employee ID',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> 
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Last Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('lname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Last Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        <br>
                        <label for="InputPassword">Enter Password</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('password',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Password',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        <!--------------------------------------separator---------------------------------------------------------------> <br>
                </div>       
                    </div> 
                    <div class="form-group"> 
                        <div class="col-xs-12">
                            <label for="InputEmail">Enter Email</label><small> <mark>(This will be used as your login username.)</mark></small>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'E-Mail',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputStreetName">Select Your Program</label>
                        <div class="input-group">
                        <?php echo $this->Form->input('program_id', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your program',
                                   'options' => array('Please select a program...' => $programs))); ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Select Your Campus</label>
                        <div class="input-group">
                       <?php echo $this->Form->input('campus', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your campus',
                                   'options' => array('St. James' => 'St. James', 'Casa Loma' => 'Casa Loma', 'Waterfront' => 'Waterfront' ))); ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">User Role</label>
                        <div class="input-group">
                      <?php
                        echo $this->Form->input('role', array(
                        'options' => array(                    
                            'staff' => 'Staff'),
                              'label' => false,
                              'class' => 'form-control input-md'             
                    ));                   
                    ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                  <div class="form-group">
                                <?php
                        echo $this->Form->submit('Register',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
                  </div>
        </form>
    </div>
      <div role="tabpanel" class="tab-pane fade" id="messages">
           <form id="student" method="POST" >
<!---form--->           <div class="form-group">
<!---input width--->    <div class="col-xs-6">
                        <label for="InputName">First Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('fname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'First Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                        <br>
                        <label for="InputName">Employee ID</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('studentid',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Employee ID',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!--------------------------------------separator---------------------------------------------------------------> 
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="InputName">Last Name</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('lname',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Last Name',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    
                        <br>
                        <label for="InputPassword">Enter Password</label>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('password',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'Password',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        <!--------------------------------------separator---------------------------------------------------------------> <br>
                </div>       
                    </div> 
                    <div class="form-group"> 
                        <div class="col-xs-12">
                            <label for="InputEmail">Enter Email</label><small> <mark>(This will be used as your login username.)</mark></small>
                        <div class="input-group">
                        <?php
                        echo $this->Form->input('username',array(
                              'label' => false,
                              'class' => 'form-control input-md',
                              'placeholder' => 'E-Mail',
                              'div' => false));
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
<!----------------------------break-------------------------------------------------------------> <br>
                     </div>
                 </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">Select Your Campus</label>
                        <div class="input-group">
                       <?php echo $this->Form->input('campus', 
                               array(
                                   'label' => false,
                                   'class' => 'form-control',
                                   'placeholder' => 'Select your campus',
                                   'options' => array('St. James' => 'St. James', 'Casa Loma' => 'Casa Loma', 'Waterfront' => 'Waterfront' ))); ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                        <label for="InputCity">User Role</label>
                        <div class="input-group">
                      <?php
                        echo $this->Form->input('role', array(
                        'options' => array(                    
                            'research' => 'Research'),
                              'label' => false,
                              'class' => 'form-control input-md'             
                    ));                   
                    ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                        

<!----------------------------break-------------------------------------------------------------> <br> 
                    </div>
                    </div>
                  <div class="form-group">
                                <?php
                        echo $this->Form->submit('Register',array(
                              'class' => 'btn btn-lg btn-success btn-block',
                              'div' => false));
                        ?>
                  </div>
        </form>
          
      </div>

  </div>

</div>