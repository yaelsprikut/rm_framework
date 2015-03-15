<?php
//User model, responsible for finding, saving and validating any user data:

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    
    public $hasOne = 'Profile';
    //public $belongsTo = array('Program');
    
    public $validate = array(
        'fname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'lname' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'studentid' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'student', 'staff', 'research')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ),      
        'program' => array(
            'valid' => array(
                'rule' => array('inList', array('T127', 'T141', 'staff')),
                'message' => 'Please enter a program',
                'allowEmpty' => false
            )
        ),
        'campus' => array(
            'valid' => array(
                'rule' => array('inList', array('St. James', 'Casa Loma', 'Waterfront')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        ) 
    );
    
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}



