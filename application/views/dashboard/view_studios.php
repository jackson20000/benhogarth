            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="title-1 m-b-25">View Studio</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small btn_artist"><a href="<?php echo base_url()?>home/add_studio"><i class="zmdi zmdi-plus"></i>add Studio</a></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Rate</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                               foreach ($list as $show){
                                 ?>
                                                <tr>
                                         <td><img src="<?php echo base_url().$show['img_bk']?>" style="height:100px;"></td>
                                                    <td class="vertical"><?php echo $show['name']; ?></td>
                                                     <td class="vertical"><?php echo $show['rate']; ?></td>
                                                    <td class="vertical">

                                               <button class="item" data-toggle="tooltip" data-placement="top"
                             title="Edit"><a href="<?php echo base_url()?>home/edit_studio?sid=<?php echo $show['id']?>">
                                                                <i class="zmdi zmdi-edit"></i></a>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                          title="Delete"><a href="<?php echo base_url()?>dashboard/del_studio?id=<?php echo $show['id']?>">
                                                            <i class="zmdi zmdi-delete"></i></a>
                                                        </button></td>
                                                </tr>
                                                <?php } ?>
                                            </body>
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

        </div>