
    <div class="banner" id="disc_bg">
        <div class="banner_bg" style="background: linear-gradient(rgba(10,20,30,0.8),rgba(10,20,30,0.5),rgba(10,20,30,1.5)),no-repeat top 58% center/cover url(<?php echo $discodetail['image'] ?>);">
           <div class="container">
            <div class="row">
                <div class="col-md-6 img_disco">
                    <img src="<?php echo $discodetail['image'] ?>" alt="" style="height:100%;">
                </div>
                <div class="col-md-6">
                    <div class="banner_cont">
                        <div class="cont_disc_banner">
                           <ul>
                               <li><?php echo $discodetail['year'] ?></li>
                           </ul>
                       </div>
                       <h3 class="cont_head"><?php echo $discodetail['name'] ?></h3>
                       <div class="cont1_disc_banner">
                        <ul>
                            <li><img class="art_img" src="<?php echo $artistdetail[0]['image'] ?>" alt="">
                            </li>
                            <li><p style="margin-left:10px;margin-top: 5px"><?php echo $artistdetail[0]['name'] ?></p></li>
                        </ul>
                       </div>
                       <div class="artist_track_list">
                           <ul class="track_list">
                               <li class="track_list1" style="background-color: rgba(0,0,0,.05);border-radius: 5px;">
                                  Tracks mixed by Bens
                               </li>
                               <?php $songs=json_decode($discodetail['songs']);
                                    $i=1;
                                    foreach ($songs as $song) {
                                ?>
                              <li>
                                   <span class="track_num"><?php echo $i ?></span>
                                    <span class="track_title"><?php echo $song ?></span>
                                    <!-- <span class="track_subtitle">Single</span> -->
                              </li>
                              <?php $i++; } ?>
                           </ul>
                       </div>
                    </div>
                    
                </div>
            </div>
               
           </div>
        </div>
        
        <div class="container">
            <div class="disc_content">
            <h2>MORE BY <?php echo $artistdetail[0]['name']  ?></h2>
            <h2>MIXED BY BEN</h2>
            <hr class="disc">
            </div>
            <div class="disc_img">
                <ul class="disc_img_list">
                    <?php 
                        if (empty($discographylist)) {
                    echo "<tr><td>No Artist Added</td><td></td><td></td></tr>";
                    }

                    foreach ($discographylist as $value) { ?>
                    <a class="gallery-item" href="<?php echo base_url()?>homeweb/disco_detail?id=<?php echo $value['id']; ?>">
                        <li>
                            <img src="<?php echo $value['image'] ?>" alt="" >
                            <div style="margin-top:10px;">
                                <p><?php echo $value['year'] ?></p>
                                <h4><?php echo $value['name'] ?></h4>
                                <p><?php echo $artistdetail[0]['name'] ?></p>
                            </div>
                        </li>
                    </a>
                    <?php } ?>
                </ul>
                
            </div>
        </div>
     
    </div>

