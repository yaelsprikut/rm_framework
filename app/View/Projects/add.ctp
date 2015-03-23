<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Profile</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('title');
echo $this->Form->input('summary');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('about');
echo $this->Form->end('Save Post');
?>