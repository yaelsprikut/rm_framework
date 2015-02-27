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
			<h2>Join Research Monster <small>Sign up and join today.</small></h2>
                        <hr>
                            <div class="well">
                                <b>Research Monster</b> is a research project-oriented network service
                               that provides George Brown College students the opportunity to 
                               view existing and upcoming research projects. It connects students,
                               faculty members, and members of the research office, making it possible
                               to directly apply for college researching opportunities and work closely
                               with professionals in the industry.                          
                            </div>
			<hr class="colorgraph">
			<div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" required>
                                </div>
                            </div>
			</div>
                        <div class="form-group">
                            <input type="text" name="studentid" id="studentid" class="form-control input-lg" placeholder="GBC Student ID" required>
			</div>
			<div class="form-group">
                          <select class="form-control input-lg" name="program" id="program" required>
                            <option>Please select your program:</option>
                            <?php
                                $connection = mysql_connect("localhost", "root", "");
                                $db = mysql_select_db("rm", $connection);

                                $query = "SELECT id, ProgramName FROM programs";
                                $result = mysql_query ($query);
                                while($r = mysql_fetch_array($result))
                                {
                                echo "<option value=".$r["id"].">".$r["ProgramName"]."</option>"; 
                                }
                                echo "</select>";
                            ?>
                          </select>
			</div>
                        <div class="form-group">
                          <select class="form-control input-lg" name="campus" id="campus" required>
                            <option>Please select your campus:</option>
                            <option>St. James Campus</option>
                            <option>Casa Loma Campus</option>
                            <option>Waterfront Campus</option>
                          </select>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
                                    </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" required>
                                    </div>
				</div>
			</div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="city" name="city" id="city" class="form-control input-lg" placeholder="City" required>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                 <select class="form-control input-lg" name="province" id="province" required>
                                    <option>Province </option>
                                    <option>Ontario</option>
                                    <option>Quebec</option>
                                    <option>Nova Scotia</option>
                                    <option>New Brunswick</option>
                                    <option>Manitoba</option>
                                    <option>British Columbia</option>
                                    <option>Prince Edward Island</option>
                                    <option>Saskatchewan</option>
                                    <option>Alberta</option>
                                    <option>Newfoundland and Labrador</option>
                                    
                                </select>
                            </div>
			</div>
                            <div class="form-group">
                                <label>Please select your date of birth:</label>
                                <input type="date" name="birthday" id="birthday" class="form-control input-lg" placeholder="Date of Birth" required>
                            </div>
			<hr class="colorgraph">
                    <div class="well">
			<div class="row">
                            <div class="col-xs-12 col-md-6">
                                    <h4>To get started on your profile:</h4>
                            </div>                                 
                            <div class="col-xs-12 col-md-6">
                                <input type="submit" value="Register Now" class="btn btn-primary btn-block btn-lg">
                            </div>				
			</div>
                    </div>
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