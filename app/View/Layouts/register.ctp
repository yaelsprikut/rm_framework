<?php $cakeDescription = __d('cake_dev', 'GBC Research Monster'); ?>
<?php  
                echo $this->Html->charset();
                echo $this->Html->css(array('bootstrap', 'bootstrap.min','styles')); 
                echo $this->fetch('meta');
                echo $this->fetch('css');    
            ?>
<link rel="shortcut icon" href="<?php echo $this->webroot; ?>img/rmfavicon.png" type="image/x-icon" />
<body background="<?php echo $this->webroot; ?>img/downloads-bg.jpg">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Register with <b>ResearchMonster.ca</b></h4><hr class='colorgraph'>
              <p>Please register your Research Monster account as a student, teacher, or a member of the research office. An account validation message will be sent to your 
                  e-mail where you can confirm your registration.<br><br>

              <br>
                  <b>Already a member?</b> <?php echo $this->Html->link('Login to Research Monster', '..#login'); ?>.</p>

            <div class="modal-body">
              <?php echo $this->fetch('content'); ?>
            
              </div><!---modal-body--->

          </div>
       </div>


 <?php      
         echo $this->Html->script(array('jquery', 'bootstrap.min', 'scripts'));
         echo $this->fetch('script'); 
    ?>
</body>
</html>