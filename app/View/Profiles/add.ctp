<!-- File: /app/View/Profiles/add.ctp -->

<h1>Create Profile</h1>
<?php
echo $this->Form->create('Profile');
echo $this->Form->input('bio');
echo $this->Form->input('workexperience');
echo $this->Form->input('researchexperience');
echo $this->Form->end('Save Profile');
?>