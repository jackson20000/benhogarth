
            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <h3 class="title-2 m-b-40">
                                        Artist
                                    </h3>
                                    <form action="<?php echo base_url('dashboard/artist_save') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Heading</label>
                                            <input type="text" value="" name="heading" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" value="" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Image</label>
                                                    <div id="userActions" style="margin-top:10px;">
                                                        <input type="file" name="img_file" id="fileUpload" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img id="imgPrime" src="" alt="" style="margin-top:40px;" />
                                                </div>
                                            </div>
                                        </div>
                                  
                                     <input type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small"
                            style="margin-top:30px;width:10%" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
      
        </div>
        <!-- END PAGE CONTAINER-->


   
<!-- end document-->