
            <!-- MAIN CONTENT-->
            <div class="discography-content">
                <div class="section_discography">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="disco_content">
                                    <h3 class="title-2 m-b-40">
                                        Discography
                                    </h3>
                                      <form action="<?php echo base_url('dashboard/discography_save') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="head" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="number" name="year" id="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Artist</label>
                                            <select class="form-control" name="artist">
                                                <?php foreach ($artistname as $val) { ?>
                                                    <option value="<?php echo $val['name'] ?>"><?php echo $val['name'] ?></option>
                                                <?php } ?>
                                            </select>
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
                                                        <input type="file" name="imgg_file" id="fileUpload" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img id="imgPrime" src="" alt="" style="margin-top:40px;" />
                                                </div>
                                            </div>
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small"
                                                style="margin-top:30px;">
                                                Save</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    