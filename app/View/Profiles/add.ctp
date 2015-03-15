<!-- File: /app/View/Profiles/add.ctp -->

<h1>Create Profile</h1>
<?php
echo $this->Form->create('Profile');
echo $this->Form->input('bio');
echo $this->Form->input('education');
echo $this->Form->input('work_experience');
echo $this->Form->input('research_experience');
echo $this->Form->end('Save Profile');
?>