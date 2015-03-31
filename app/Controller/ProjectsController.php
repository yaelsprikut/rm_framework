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
        'conditions' => array('Project.create_id' => $this->Auth->user('id')))));
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
            $this->request->data['Project']['create_id'] = $this->Auth->user('id');
            if ($this->Project->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your project '
                        . '                     has been saved.</div>'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    
        
        
    public function apply(){
        $this->loadModel('ProjectApply');
        
        $found = $this->ProjectApply->find('first',array(
            'conditions'=>array(
                'user_id'=>$this->request->query['user'],
                'project_id'=>$this->request->query['project']
            )
        ));
        if(count($found)==0){
        $this->ProjectApply->set(array(
            'user_id' => $this->request->query['user'],
            'project_id' =>$this->request->query['project']
        ));
        
            $this->ProjectApply->save();
            $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>You have '
                        . ' successfully applied for this project.</div>'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            You have already applied for this project.
                          </div>'));
        return $this->redirect(array('action' => 'index'));
    }
    
    public function applied(){
        $this->loadModel('ProjectApply');
        $this->loadModel('Project');
        //$this->loadModel('Project');
        $this->set('projects', $this->ProjectApply->find('all'));
        $this->set('applied', $this->Project->find('all'));
        //$this->set('projects', $this->Project->find('all'));
        $this->set('my_projects', $this->ProjectApply->find('all', array(
        'conditions' => array('ProjectApply.user_id' => $this->Auth->user('id')))));       
    }
    
    public function applicants($project_id){
          $this->loadModel('ProjectApply');
//        //$this->loadModel('Project');
//        $this->set('applicants', $this->ProjectApply->find('all'), array(
//            'conditions' => array('Project.create_id' =>$this->Auth->user('id'))
//        ));
        if (!$project_id) {
            throw new NotFoundException(__('Invalid project'));
        }

        $project = $this->ProjectApply->find('all', array(
            'conditions' => array('Project.id' => $project_id)
        ));
        if (!$project) {
            //throw new NotFoundException(__('Invalid project'));
            $this->Session->setFlash('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            There are no current applicants for this project.
                          </div>');
        }
        $this->set('project', $project);
    }   
        
    
    public function saveProject(){
         $this->loadModel('ProjectSave');
        
        $found = $this->ProjectSave->find('first',array(
            'conditions'=>array(
                'user_id'=>$this->request->query['user'],
                'project_id'=>$this->request->query['project']
            )
        ));
        if(count($found)==0){
        $this->ProjectSave->set(array(
            'user_id' => $this->request->query['user'],
            'project_id' =>$this->request->query['project']
        ));
        
            $this->ProjectSave->save();
            $this->Session->setFlash(__('<div class="alert alert-success alert-dismissible" role="alert">'
                        . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>You have '
                        . ' successfully saved this project.</div>'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('<div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            You have already saved this project.
                          </div>'));
        return $this->redirect(array('action' => 'index'));
              
    }
    
     public function saved(){
        $this->loadModel('ProjectSave');
        $this->loadModel('Project');
        //$this->loadModel('Project');
        $this->set('projects', $this->ProjectSave->find('all'));
        $this->set('saved', $this->Project->find('all'));
        //$this->set('projects', $this->Project->find('all'));
        $this->set('my_projects', $this->ProjectSave->find('all', array(
        'conditions' => array('ProjectSave.user_id' => $this->Auth->user('id')))));       
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
            __('<div class="alert alert-warning" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Notice:</span>
                            Project %s has been deleted.
                          </div>', h($id))
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
    if ($this->action === 'apply' || $this->action === 'saveProject'){
    if($user['role'] == 'student' || $user['role'] == 'staff'){
         return true;   
        }   
    }
    
    if ($this->action === 'applied' || $this->action === 'saved'){
    if($user['role'] == 'student' || $user['role'] == 'staff'){
         return true;   
        }
    }
    
    if ($this->action === 'add' || $this->action === 'applicants') {
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

