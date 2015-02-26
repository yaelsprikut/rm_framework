<?php


/* Now, let’s add an action to our controller. Actions often represent a single function 
or interface in an application. For example, when users request www.example.com/posts/index 
(which is the same as www.example.com/posts/), they might expect to see a listing of posts. 
The code for that action would look something like this:*/

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
         $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }
}

/* The single instruction in the action uses set() to pass data from the controller 
to the view (which we’ll create next). The line sets the view variable called ‘posts’ 
equal to the return value of the find('all') method of the Post model. Our Post model 
is automatically available at $this->Post because we’ve followed CakePHP’s naming conventions.*/

?>
