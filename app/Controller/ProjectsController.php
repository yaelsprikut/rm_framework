<?php
class ProjectsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'Search.Prg');

    var $actsAs = array ('Search.Searchable'); 
    
    public $presetVars = array(
    array('field' => 'title', 'type' => 'value'),             
    );

    public function index() {
        $this->Prg->commonProcess();
        $this->paginate = array(
        'conditions' => $this->Project->parseCriteria($this->passedArgs));
        //$this->set('projects', $this->Project->find('all'));
//        $this->set('my_projects', $this->Project->find('all', array(
//        'conditions' => array('Project.user_id' => $this->Auth->user('id')))));
        $this->set('projects', $this->paginate());
    }
    
    public function projects() {
        $this->set('projects', $this->Project->find('all'));
        $this->set('my_projects', $this->Project->find('all', array(
        'conditions' => array('Project.user_id' => $this->Auth->user('id')))));
    }
    
    public function admin_index() {
        $this->set('projects', $this->Project->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid project'));
        }

        $project = $this->Project->findById($id);
        if (!$project) {
            throw new NotFoundException(__('Invalid project'));
        }
        $this->set('project', $project);
    }

    public function add() {
        $this->set('programs', $this->Project->Program->find('list', array(
        'fields' => 'Program.ProgramName')));
        if ($this->request->is('post')) {
            //$this->Post->create();
            $this->request->data['Project']['user_id'] = $this->Auth->user('id');
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your project '
                        . '                     has been saved.</div>'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid project'));
    }

    $project = $this->Project->findById($id);
    if (!$project) {
        throw new NotFoundException(__('Invalid project'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Project->id = $id;
        if ($this->Project->save($this->request->data)) {
            $this->Session->setFlash(__('Your project has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your project.'));
    }

    if (!$this->request->data) {
        $this->request->data = $project;
        }
    }
    
    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Project->delete($id)) {
        $this->Session->setFlash(
            __('The project with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The project with id: %s could not be deleted.', h($id))
        );
    }
     

    return $this->redirect(array('action' => 'index'));
    }
    
        public function admin_delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Project->delete($id)) {
        $this->Session->setFlash(
            __('The project with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The project with id: %s could not be deleted.', h($id))
        );
    }
     

    return $this->redirect(array('action' => 'index'));
    }
    
   public function isAuthorized($user) {
    // All registered users can add posts
       
    if ($this->action === 'add') {
        if($user['role'] == 'research'){
        return true;
        }
    }
    
    if ($this->action === 'projects') {
        if($user['role'] == 'research'){
        return true;
        }
    }

    if (in_array($this->action, array('edit', 'delete'))) {
        $projectId = (int) $this->request->params['pass'][0];
        if ($this->Project->isOwnedBy($projectId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
   
}

