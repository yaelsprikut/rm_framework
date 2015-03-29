<?php

class Program extends AppModel{
    //public $displayField = 'programs';
     public $hasMany = array('User', 'Project');
     public $belongsTo = array(
        'Program' => array(
            'className' => 'Program',
            'foreignKey' => 'program_id'
        )
    );
     
    
}

