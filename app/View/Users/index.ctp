

<div id="container">
            <h2>Welcome to my website.</h2> <h2>Please select an option:</h2>
            <?php //echo $html->link('Login', array('action' => 'index')); ?>
            <?php echo $this->Html->link('Login', 'login'); ?>
            <br>
            <br>
            <?php echo $this->Html->link('Register', 'add'); ?>
	</div>
<?php $this->layout = 'default'; ?>