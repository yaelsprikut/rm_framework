<?php if ($current_user['role'] == 'admin'){
    print '<div class="col-md-3 sidebar">
			<div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b>Dashboard Menu</b></div>

                <!-- List group -->
                <ul class="list-group">
                  <li class="list-group-item">List Users</li>
                  <li class="list-group-item">News and Announcements</li>
                  <li class="list-group-item">Career Events</li>
                  <li class="list-group-item">Browse Users</li>
                  <li class="list-group-item">Browse Projects</li>
                </ul>
              </div>
		</div>';
} else{
   print '<div class="col-md-3 sidebar">
			<div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><b>Navigation</b></div>

                <!-- List group -->
                <ul class="list-group">
                  <li class="list-group-item">List Users</li>
                  <li class="list-group-item">News and Announcements</li>
                  <li class="list-group-item">Career Events</li>
                  <li class="list-group-item">Browse Users</li>
                  <li class="list-group-item">Browse Projects</li>
                </ul>
              </div>
		</div>';
}

                        