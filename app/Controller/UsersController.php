<?php
//UsersController, the following contents correspond to a basic baked UsersController 
//class using the code generation utilities bundled with CakePHP

App::uses('AppController', 'Controller');

class UsersController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
        
        
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
//        $data = $this->User->Program->find('list', array('fields' => array('id','ProgramName')));
//        $this->set('programs', $data);

    }
    
    public function admin_index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());

    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">You have registered. Login to complete your profile.</div>'));
                return $this->redirect(array('action' => '../#login'));
            }
            $this->Session->setFlash(
                __('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Your account could not be registered.
                          </div>')
            );
        }
    }
    
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">You have registered. Login to complete your profile.</div>'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Your account could not be registered.
                          </div>')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->Profile->save($this->request->data) && $this->User->save($this->request->data)) {
                //debug($this->request->data);
                   $this->Session->write('Auth.User', array_merge(AuthComponent::User(), $this->request->data['User']) ); 
                   return $this->redirect(array('action' => 'index'));
                             
            }
            $this->Session->setFlash(
                __('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Oops, something went wrong. Please try again.
                          </div>')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {

        //$this->request->allowMethod('get');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

        public function login() {
            if ($this->request->is('post')) {
                if ($this->Auth->login()) {                                      
                    return $this->redirect(
                    array('controller' => 'profiles', 'action' => 'index')
                    );
                }
                $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            Enter a valid username and password.
                          </div>'));
                $this->redirect('#login');
            }
        }

        public function logout() {
            $this->Auth->logout();
            $this->redirect('../'); //redirects back to index
                               
        }
        
     public function isAuthorized($user){
    // Admin can access every action
        $this->set('current_user', $this->Auth->user());

        if ($this->action === 'add') {
            return true;
        }
        
        if(in_array($this->action, array('edit', 'delete'))){
            if($this->request->params['pass'][0] == $user['id'] || $user['role'] === 'admin'){         
            return true;
            } 
        }
        return parent::isAuthorized($user); //gives permission to the admin to access everything
        }
              
        
}



