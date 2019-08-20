
            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="title-1 m-b-25">View Discography</h3>
                                        </div>
                                        <div class="col-md-6">
                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small btn_artist"><a
                                                    href="<?php echo base_url()?>home/add_discography">
                                                    <i class="zmdi zmdi-plus"></i>add item</a></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                             <?php
                                if (empty($discographylist)) {
                                  echo "<tr><td>No Products Added</td><td></td><td></td></tr>";
                                }
                                foreach ($discographylist as $list){
                              ?>
            
                                    <tr>
                                        <input type="hidden" value="">
                                        <td><img src="<?php echo base_url().$list['image']; ?>" style="height:100px;"></td>
                                        <td class="vertical"><?php echo $list['heading']; ?></td>

                                        <td class="vertical">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Edit"><a href="<?php echo base_url()?>home/discography?id=<?php echo $list['id'] ?>">
                                                    <i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete"><a href="<?php echo base_url()?>dashboard/discodelete?id=<?php echo $list['id'] ?>">
                                                <i class="zmdi zmdi-delete"></i></a>
                                            </button></td>
                                    </tr>
                                     <?php } ?>
                                        
                                            </tbody>
                                        </table>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->

      

      