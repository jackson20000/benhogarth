    <!-- section -->
    <div class="art_section" style="background-color:#ffffff; ">
        <div class="container">
            <h1 class="head_art" style="color:black;">DISCOGRAPHY</h1>
        </div>
    </div>
    <!-- section -->
  
      <!-- main -->
    <div id="fh5co-page">
        <div id="fh5co-main">
            <div class="fh5co-gallery">
                <?php foreach ($discography as $value) { ?>
                <a class="gallery-item" href="<?php echo base_url().'homeweb/disco_detail?id='.$value['id'] ?>">
                    <img src="<?php echo $value['image'] ?>" >
                    <span class="overlay">
                        <h2><?php echo $value['url'] ?></h2>
                        <span><?php echo $value['year'] ?></span>
                    </span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>

  
