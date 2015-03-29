<?php

class Project extends AppModel {
    
    var $name = 'Project';
    public $displayField = 'title';
    public $belongsTo = array(
        'Program' => array(
            'className' => 'Program',
            'foreignKey' => 'program_id'
        )
    );
	//var $hasMany = array('Comment'=>array('className'=>'Comment'));
	//var $hasAndBelongsToMany = array('Tag'=>array('className'=>'Tag'));
    var $actsAs = array('Search.Searchable');
    
             
    public $filterArgs = array(
    'title' => array('type' => 'query', 'method' => 'filterTitle')
    );

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

    
     public function filterTitle($data = array()) {
        $filter = $data['title'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'OR' => array(
                $this->alias . '.title LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
    
    
    public function isOwnedBy($project, $user) {
    return $this->field('id', array('id' => $project, 'user_id' => $user)) !== false;
}
    
}

