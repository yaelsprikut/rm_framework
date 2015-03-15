<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend>Edit User</legend>
	<?php
		echo $this->Form->input('fname');
		echo $this->Form->input('username');
		echo $this->Form->input('lname');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>