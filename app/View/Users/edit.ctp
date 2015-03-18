<div class="users form">
<?php echo $this->Form->create('User');?>
    
	<fieldset>
 		<legend>Edit User</legend>
                
	<?php
        
        debug($current_user);
		echo $this->Form->input('fname');
		echo $this->Form->input('username');
		echo $this->Form->input('lname');
                //echo $current_user['program_id'];
                echo $this->Form->input('Profile.bio');  
                echo $this->Form->input('Profile.work_experience');  
                echo $this->Form->input('Profile.id');  
//                echo $this->Form->input('username', array(
//                'options' => array('id' => 'username')
//                ));
                   //$user = $current_user;
                   //Debugger::dump($user); 
               
	?>
	
<?php echo $this->Form->end('Submit');?>
</div>


