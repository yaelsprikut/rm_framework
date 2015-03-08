<?php

class ProfilesController extends AppController{
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session'); //only allow 
    
    public function index() {
        $this->set('posts', $this->Post->find('all')); //show all the posts in posts/index
    }
    
    
}

