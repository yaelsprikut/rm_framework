<?php

class Profile extends AppModel{
        //public $belongsTo = 'User';
 //       public $hasOne = 'User';
//      public $belongsTo = array(
//        'User' => array(
//            'className' => 'User',
//            'foreignKey' => 'user_id'
//        )
//    );
    
     public $validate = array(
        'user_id' => array(
            'rule' => 'notEmpty'   
        ),
        'bio' => array(
            'rule' => 'notEmpty'   
        ),
         'semester' => array(
            'rule' => 'notEmpty'   
        ),
        'work_experience' => array(
            'rule' => 'notEmpty'
        ),
        'research_experience' => array(
            'rule' => 'notEmpty'
        ),
         'education' => array(
            'rule' => 'notEmpty'
        ),
         'projects_applied' => array(
            'rule' => 'notEmpty'
        ),
         'tags' => array(
            'rule' => 'notEmpty'
        )
         
    );
    
    public function isOwnedBy($profile, $user) {
        return $this->field('id', array('id' => $profile, 'user_id' => $user)) !== false;
    }
}

