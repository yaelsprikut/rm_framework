<?php echo $this->element('header');?> 
<hr class="colorgraph">
<div class="panel">
    <div class="panel-heading" style="background-color:#0065A4;color:#eee;">Project Posting</div>
<div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h3><?php echo $project['Project']['title']; ?></h3>

                <!-- Author -->
                <h5>
                    by <a href="#">Start Bootstrap</a>
                </h5>
               <hr>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $project['Project']['created']; ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/800x200" alt="">
                <br>
                <!-- Post Content -->
                <h4>Project Summary</h4>
                <p><?php echo $project['Project']['summary']; ?></p>
                <hr>
                <h4>Project Summary</h4>
                <p><?php echo $project['Project']['description']; ?></p>
                <br>
                <h4>About the Industry Partner</h4>
                <p><?php echo $project['Project']['about']; ?></p>
                <hr>
                 <div class="well"> 
                    <h4>Monster Tags</h4>
                    <hr>
                    <button class="btn btn-primary">#CSS</button>
                    <button class="btn btn-primary">#WordPress</button>
                    <button class="btn btn-primary">#PHP</button>
                    <button class="btn btn-primary">#HTML</button>
                  </div>
            </div>
            <br>
            <?php echo $this->element('column');?>
        </div>
    </div>
    <br>
</div>