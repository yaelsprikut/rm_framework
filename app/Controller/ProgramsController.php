<?php

class ProgramsController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index() {
        $this->set('programs', $this->Program->find('all'));
        
      
    }
    
}

