<?php

class Post extends AppModel {
    
    var $name = 'Post';
	//var $hasMany = array('Comment'=>array('className'=>'Comment'));
	var $hasAndBelongsToMany = array('Tag'=>array('className'=>'Tag'));
        
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'   
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
}
    
}


