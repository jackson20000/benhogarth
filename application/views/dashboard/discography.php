
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
             <form action="<?php echo base_url('home/edit_discography') ?>" method="POST" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="<?php echo $discography[0]['id'] ?>">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="head" value="<?php echo $discography[0]['heading'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="<?php echo $discography[0]['name'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="number" value="<?php echo $discography[0]['year'] ?>" name="year" id="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Artist</label>
                                            <select class="form-control" name="artist">
                                                <?php foreach ($artistname as $val) { ?>
                                                    <option <?php if($val['name']==$discography[0]['artist']){echo 'selected';}?>><?php echo $val['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="<?php echo $discography[0]['url'] ?>" name="url" id="date" class="form-control">
                                        </div>
                                            <label>Songs</label>
                                       
                                            <fieldset>
                                            <!-- Form Name -->

                                            <!-- Text input-->
                                            <div id="items" class="form-group">
                                            <div class="col-md-12 margin-bottom">
                                            <input id="textinput" name="songs[]" type="text" placeholder="Enter name " class="form-control input-md"
                                            style="margin-bottom:10px;">

                                            </div>
                                            </div>

                                            </fieldset>

                                            <button id="addd" class="btn add-more button-yellow uppercase" type="button">+ Add Field</button>
                                            <button class="deletee btn button-white uppercase">- Remove Field</button>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Image</label>
                                                    <div id="userActions" style="margin-top:10px;">
                                                        <input type="file" name="imgg_file" id="fileUpload" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img id="imgPrime" src="<?php echo $discography[0]['image'] ?>" alt="" style="margin-top:40px;" />
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
   
