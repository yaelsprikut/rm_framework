<?php

class Profile extends AppModel{
    
        public $belongsTo = 'User';
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
        'workexperience' => array(
            'rule' => 'notEmpty'
        ),
        'researchexperience' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public function isOwnedBy($profile, $user) {
        return $this->field('id', array('id' => $profile, 'user_id' => $user)) !== false;
    }
}

