<?php

class Project extends AppModel {
    
    var $name = 'Project';
	//var $hasMany = array('Comment'=>array('className'=>'Comment'));
	//var $hasAndBelongsToMany = array('Tag'=>array('className'=>'Tag'));
        
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'   
        ),
        'summary' => array(
            'rule' => 'notEmpty'   
        ),
        'description' => array(
            'rule' => 'notEmpty'   
        ),
        'skills' => array(
            'rule' => 'notEmpty'   
        ),
        'about' => array(
            'rule' => 'notEmpty'   
        )
    );
    
    public function isOwnedBy($project, $user) {
    return $this->field('id', array('id' => $project, 'user_id' => $user)) !== false;
}
    
}

