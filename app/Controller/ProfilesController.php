<?php

class ProfilesController extends AppController{
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session'); //only allow 
    
    public function index() {
        $this->set('profiles', $this->Profile->find('all'));
    }
    
     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid profile'));
        }
        $profile = $this->Profile->findById($id);
        if (!$profile) {
            throw new NotFoundException(__('Invalid profile'));
        }
        $this->set('profile', $profile);
        $this->Profile->id = $id;
        
    }
    
    public function add() {
        if ($this->request->is('post')) {
            //$this->Post->create();
            $this->request->data['Profile']['user_id'] = $this->Auth->user('id');
            if ($this->Profile->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

        public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid profile'));
        }

        $profile = $this->Profile->findById($id);
        if (!$profile) {
            throw new NotFoundException(__('Invalid profile'));
        }

        if ($this->request->is(array('profile', 'put'))) {
            $this->Profile->id = $id;
            if ($this->Profile->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">Your profile '
                        . '                     has been successfully updated.</div>'));
                return $this->redirect(array('controller'=> 'user', 'action' => 'view', $profile['User']['id']));
            }
            $this->Session->setFlash(__('Unable to update your profile.'));
        }

        if (!$this->request->data) {
            $this->request->data = $profile;
        }
    }
    
    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Profile->delete($id)) {
        $this->Session->setFlash(
            __('The profile with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The profile with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
    }
    
   public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $profileId = (int) $this->request->params['pass'][0];
        if ($this->Profile->isOwnedBy($profileId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
    }
}

    