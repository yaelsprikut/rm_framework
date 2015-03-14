<?php

class ProfilesController extends AppController{
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session'); //only allow 
    
    public function index() {
        $this->set('profiles', $this->Profile->find('all')); //show all the posts in posts/index
    }
    
     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $profile = $this->Profile->findById($id);
        if (!$profile) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('profile', $profile);
    }
}

