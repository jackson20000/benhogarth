
            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <h3 class="title-2 m-b-40">
                                        Update Studio Details
                                    </h3>
                                        <form method="POST"  action="<?php echo base_url();?>dashboard/update_studio" id="addslider" method="post" enctype="multipart/form-data"> 
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="hidden" value="<?php echo $show[0]['id'] ?>" name="id">
                                        <input type="text" value="<?php echo $show[0]['name']; ?>" name="name"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"  rows="3"><?php echo $show[0]['description']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum Booking</label>
                                            <input type="text" value="<?php echo $show[0]['mini_booking']; ?>" name="mini_booking"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Booking</label>
                                            <input type="text" value="<?php echo $show[0]['max_booking']; ?>" name="max_booking"   class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="lat" value="<?php echo $show[0]['lat']; ?>" id="lat" value="" class="form-control" placeholder="Latitude"><br>
                                                <input type="text" name="lng" value="<?php echo $show[0]['lng']; ?>" id="lng" value="" class="form-control" placeholder="Longitude">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                                <div id="map" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Rate</label>
                                            <div class="input-group mb-3 form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" name="rate"  value="<?php echo $show[0]['rate']; ?>"class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Amenities</label>
                                        <textarea class="form-control" name="amenities"  rows="3"><?php echo $show[0]['amenities']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <input type="text" value="<?php echo $show[0]['url']; ?>" name="url"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Image</label>
                                                    <div id="userActions" style="margin-top:10px;">
                                                        <input type="file" id="fileUpload" name="img_bk" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <img id="imgPrime" class="img_bk" name="img_bk" src="<?php echo $show[0]['img_bk']; ?>"alt="" style="margin-top:40px; width: 25%;" />
                                                </div>
                                            </div>
                                        </div>

                                        <input type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small" name="login" value="Save"/>
                                        
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