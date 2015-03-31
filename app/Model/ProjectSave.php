<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProjectSave extends AppModel {
    //put your code here
      public $useTable = 'projects_users_saves';
      public $belongsTo = array('User', 'Project');
}
