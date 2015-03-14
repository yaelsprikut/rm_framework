                <div class="row">
                    <div class="col-sm-6 col-md-4">
                         <img src="http://placehold.it/300x300" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <!-- Contact Info -->
                        <h3><b><?=$this->Session->read('Auth.User.fname')?>&nbsp;<?=$this->Session->read('Auth.User.lname')?></b></h3>
                        <p>
                        <i class="glyphicon glyphicon-envelope"></i>&nbsp;<?=$this->Session->read('Auth.User.username')?>
                        <br /></p>
                        <p><i class="glyphicon glyphicon-book"></i>&nbsp;T127 - Computer Programming Analyst
                        <br /></p>
                        <p><i class="glyphicon glyphicon-map-marker"></i>&nbsp;<?=$this->Session->read('Auth.User.campus')?></p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Send Message</button>
                        </div>
                    </div>
                </div> 