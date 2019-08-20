    <!-- section -->
    <div class="art_section">
        <div class="container">
            <h1 class="head_art">ARTISTS</h1>

        </div>
    </div>
    <!-- section -->

    <main class="main-wrapper" id="container">

        <!-- image Gallery -->

        <div class="wrapper">
            <div class="">
                <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-5 masonry" id="myList">
                    <?php foreach ($artist as $artistdata) { ?>
                    <li class="masonry-item grid">
                        <figure class="effect-sarah"> <img src="<?php echo $artistdata['image'] ?>" alt="" />
                            <figcaption>
                                <h2><?php echo $artistdata['heading']; ?> <span><?php echo $artistdata['name']; ?></span></h2> 
                                <a href="<?php echo base_url() ?>homeweb/artist_detail?id=<?php echo $artistdata['id']; ?>">View more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </main>

    <!-- ======== Load more======= -->
    <div class="load_more">
        <a href="#" id="loadMore">Load more</a>
    </div>
    <!-- ======== Load more======= -->
   
   