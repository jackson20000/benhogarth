
            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <h3 class="title-2 m-b-40">
                                        Studio
                                    </h3>
                                    <form method="POST" action="<?php echo base_url('dashboard/studio_save')?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" value="" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" name="lat" id="lat" value="" class="form-control" placeholder="Latitude"><br>
                                                <input type="text" name="lng" id="lng" value="" class="form-control" placeholder="Longitude">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                                                <div id="map" style="height: 300px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Minimum Booking</label>
                                            <input type="text" name="mini_booking" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Maximum Booking</label>
                                            <input type="text" name="max_booking" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Rate</label>
                                            <div class="input-group mb-3 form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" name="rate" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Amenities</label>
                                            <textarea name="amenities" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" name="url" value="" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Image</label>
                                                    <div id="userActions" style="margin-top:10px;">
                                                        <input type="file" name="img_bk" id="fileUpload" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img id="imgPrime" src="" alt="" style="margin-top:40px;" />
                                                </div>
                                               
                                            </div>
                                        </div>
                                         <button class="au-btn au-btn-icon au-btn--green au-btn--small"
                                        style="margin-top:30px;width:10%">
                                        Save</button>
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


   