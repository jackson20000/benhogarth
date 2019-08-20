            <!-- MAIN CONTENT-->

            <div class="content">
                <div class="art_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gallery">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 class="title-1 m-b-25">Bookings</h3>
                                        </div>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Studio Name</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                               foreach ($list as $show){
                                 ?>
                                                <tr style="text-align: center;">
                                                    <td class="vertical"><?php echo $show['name']; ?></td>
                                                     <td class="vertical"><?php echo $show['email']; ?></td>
                                                     <td class="vertical"><?php echo $show['phone']; ?></td>
                                                     <td class="vertical"><?php echo $show['studio']; ?></td>
                                                     <td class="vertical"><?php echo $show['date']; ?></td>
                                                     <td class="vertical"><?php echo 
                                                     $show['stime']." to ".$show['etime']; ?></td>
                                                     <td class="vertical"><?php echo $show['amount']; ?></td>
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