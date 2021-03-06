<?php
//User model, responsible for finding, saving and validating any user data:

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    
    public $hasOne = 'Profile';
    public $hasMany = array(
        'ProjectSave' => array(
            'foreignKey' => 'user_id'
        ),
        'ProjectApply' => array(
            'foreignKey' => 'user_id'
        ),
        'Project' => array(
            'foreignKey' => 'create_id'
        ));
    public $belongsTo = array(
        'Program' => array(
            'className' => 'Program',
            'foreignKey' => 'program_id'
        )
    );
    //var $actsAs = array ('Searchable'); 
    
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



