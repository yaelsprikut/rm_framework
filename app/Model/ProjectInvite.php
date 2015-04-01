<?php

class ProjectInvite extends AppModel {
    //put your code here
     public $useTable = 'projects_users_invites';
     public $belongsTo = array('User', 'Project');
}

