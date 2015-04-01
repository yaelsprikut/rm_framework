<?php
//UsersController, the following contents correspond to a basic baked UsersController 
//class using the code generation utilities bundled with CakePHP

App::uses('AppController', 'Controller');

class UsersController extends AppController {
    public $components = array('Session', 'Search.Prg');
    var $actsAs = array ('Search.Searchable'); 
       
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
        
        
    }
    
    public function about(){
        $this->User->recursive = 0;
        //$this->set()
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
//        $data = $this->User->Program->find('list', array('fields' => array('id','ProgramName')));
//        $this->set('programs', $data);
        $this->Prg->commonProcess();
        $this->paginate = array(
        'conditions' => $this->Project->parseCriteria($this->passedArgs));

    }
    
    public function admin_index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
        $this->set('programs', $this->User->Program->find('list', array(
        'fields' => 'Program.ProgramName')));
        $this->set('students', $this->User->find('list', array(
        'conditions' => array('User.role' => 'student'))));
        $this->set('staff', $this->User->find('list', array(
        'conditions' => array('User.role' => 'staff'))));
        $this->set('research', $this->User->find('list', array(
        'conditions' => array('User.role' => 'research'))));
        
        

    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        $this->set('programs', $this->User->Program->find('list', array(
        'fields' => 'Program.ProgramName')));
        if ($this->request->is('post')) {
            $this->User->create();
            //$this->request->data['Profile']['user_id'] = $this->Auth->user('id');
            //$this->User->Profile->create();
           
            if ($this->User->save()) {
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
                $this->Session->setFlash(__('<div class="alert alert-success" role="alert">You have successfully created a user.</div>'));
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
        $this->set('programs', $this->User->Program->find('list', array(
        'fields' => 'Program.ProgramName')));
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->Profile->save($this->request->data) && $this->User->save($this->request->data)) {
                //debug($this->request->data);
                   $this->Session->write('Auth.User', array_merge(AuthComponent::User(), $this->request->data['User']) ); 
                   $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your profile '
                        . '                     has been successfully updated.</div>'));
                return $this->redirect(array('action' => 'view', $this->Auth->user('id')));
                             
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
    
    public function admin_edit($id = null) {
        $this->set('programs', $this->User->Program->find('list', array(
        'fields' => 'Program.ProgramName')));
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->Profile->save($this->request->data) && $this->User->save($this->request->data)) {
                   $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>The profile '
                        . '                     has been successfully updated.</div>'));
                return $this->redirect(array('admin' => true, 'action' => 'index'));
                             
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
            $this->Session->setFlash(__('<div class="alert alert-warning" role="alert">
                            Deactivated User Account.
                          </div>'));
            return $this->redirect(array('admin' => true ,'action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

        public function login() {
            $this->set('profile', $this->User->Profile->find('all'));
            if ($this->request->is('post')) {
                if ($this->Auth->login()) { 
                    if($this->Auth->user('role') == 'admin'){
                    return $this->redirect(
                    array('admin' => true, 'controller' => 'users', 'action' => 'index')
                    );
                }if($this->Auth->user('role') !== 'admin'){
                    if(!$profile){
                        return $this->redirect(
                    array('controller' => 'profiles', 'action' => 'add')
                    );
                     
                        return $this->redirect(
                    array('controller' => 'projects', 'action' => 'index')
                    );
                    }
                    
                }
                
                    return $this->redirect(
                    array('controller' => 'projects', 'action' => 'index')
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

        if ($this->action === 'add' || $this->action === 'about') {
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



