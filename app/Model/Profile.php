<?php

class Profile extends AppModel{
    
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

