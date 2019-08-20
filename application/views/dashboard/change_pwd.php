
            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <h3 class="title-2 m-b-40">
                                        Change password
                                    </h3>
                                        <form method="POST"  action="<?php echo base_url();?>dashboard/change_pwd" id="addslider" method="post"> 
                                        <div class="form-group">

                                            <label>Current password</label>
                                            <input type="password" value="" name="currentpwd"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" value="" name="newpwd"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm password</label>
                                            <input type="password" value="" name="cnf_pwd"   class="form-control">
                                        </div>
                                        <input type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" name="submit" value="Change"/>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>