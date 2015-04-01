<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
App::uses('CakeEmail', 'Network/Email');

class AppController extends Controller {
//     public $components = array('Session', 'Search.Prg');
//     var $actsAs = array ('Search.Searchable'); 
    
    //public $helpers = array('Js' => array('Jquery'));
    public $components = array(
    'Session',
    'Auth' => array(
        'loginRedirect' => array('controller' => 'posts', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'pages','action' => 'display','home'),
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => 'Blowfish'
            )
        ),
        'authorize' => array('Controller')
    )
);
    public function isAuthorized($user) {
    // Admin can access every action
    $this->set('current_user', $this->Auth->user());
    
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
   // Default deny
    return false;
    }
      

 public function beforeFilter() {
                
        
        //login layout by user
        $user = $this->Auth->user();
        $this->Auth->allow('index', 'view'); //changed 'index' to 'display' to view homepage
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
        
        if($user['role'] == 'student' || $user['role'] == 'staff' || $user['role'] == 'research'){
            $this->layout = 'user';
        }else if($user['role'] == 'admin'){
            $this->layout = 'admin';
        }else{
            $this->layout = 'default';
        }
                
    }  
      
}


