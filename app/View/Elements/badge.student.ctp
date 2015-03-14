                <div class="row">
                    <div class="col-sm-6 col-md-4">
                         <img src="http://placehold.it/300x300" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <!-- Contact Info -->
                        <h3><b><?php echo $user['User']['fname']; ?>&nbsp;<?php echo $user['User']['lname']; ?></b></h3>
                        <p>
                        <i class="glyphicon glyphicon-envelope"></i>&nbsp;<?php echo $user['User']['username']; ?>
                        <br /></p>
                        <p><i class="glyphicon glyphicon-book"></i>&nbsp;<?php echo $user['User']['program']; ?>
                        <br /></p>
                        <p><i class="glyphicon glyphicon-map-marker"></i>&nbsp;<?php echo $user['User']['campus']; ?></p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Send Message</button>
                        </div>
                    </div>
                </div> 