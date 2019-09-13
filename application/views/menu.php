<body>
<style>
  .dropbtn {
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 115px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left:15px;
  border-radius:3px;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown:hover .dropdown-content {
  display: block;
  z-index:10000;
}
.dropdownlink{
  font-size:15px;
  transition: transform .8s;
}
.dropdownlink:hover{
  font-size:16px;
  background-color:#1b1b1b;
}
</style>
    <!-- header -->
    <header role="header">
        <!--<div class="container head_logo">-->
            <!-- logo -->
            <!--<div>-->
            <!--    <a href="<?php echo base_url()?>homeweb" title="Benhogarth"><img src="<?php echo base_url()?>assets/frontend/images/logo.png" title="Benhogarth" alt="Benhogarth"-->
            <!--            style="height:60px" /></a>-->
            <!--</div>-->
            <!-- logo -->
            <!-- nav -->
            <!--<nav role="header-nav" class="navy">-->
            <!--    <ul>-->
            <!--        <li class="nav-active"><a href="<?php echo base_url()?>homeweb" title="Home">Home</a></li>-->
                    <!--<li><a href="<?php echo base_url()?>homeweb/about" title="Home">About</a></li>-->
                    <!--<li><a href="<?php echo base_url()?>homeweb/discography" title="Discography">Discography</a></li>-->
            <!--        <li><a href="<?php echo base_url()?>homeweb/booking" title="Artists">Booking</a></li>-->
            <!--         <li><a href="<?php echo base_url()?>homeweb/upload" title="Artists">Upload</a></li>-->
                    <!-- <li><a href="#contact" title="Contact">Contact</a></li> -->
            <!--    </ul>-->
            <!--</nav>-->
            <!-- nav -->
        <!--</div>-->
    </header>
    <!-- header -->
    <section id="slct" class="wrapper" style="background-color:black;padding-bottom: 0px;">
    <div class="container-fluid">
      <div class="slct" style="background-color:black;font-family: arial!important;">
       <ul class="head_icon" style="position:absolute;">
          <li class="head_newicon">BENHOGARTH</li>
         
          <!-- <li class="head_newicon"><a href="mailto:info@benhogarth.com" class="fa fa-envelope"></a></li>
          <li class="head_newicon"><a href="https://wetransfer.com" class="fa fa-upload" target="_blank"></a></li>
          <li class="head_newicon"><a href="<?php echo base_url()?>homeweb/booking" class="fa fa-calendar-check-o" target="_blank" ></a></li> -->
          </ul>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
          <div class="container-fluid">
         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="float:right;">
              <ul class="navbar-nav mr-auto w-100 justify-content-end navmenu">
                <li class="nav-item dropdown hidden-web">
                  <a class="nav-link page-scroll dropbtn" >BOOKING</a>
                    <div class="dropdown-content">
                      <a class="dropdownlink" href="<?php echo base_url()?>homeweb/mix" target="_blank">MIX</a>
                      <a class="dropdownlink" href="<?php echo base_url()?>homeweb/master" target="_blank">MASTER</a>
                      <a class="dropdownlink" href="<?php echo base_url()?>homeweb/book_studio" target="_blank">ENGINEER</a>
                    </div>
                </li>
                <li class="nav-item hidden-mobile">
                      <a class="nav-link page-scroll" href="<?php echo base_url()?>homeweb/mix" target="_blank">MIX</a>
                      <a class="nav-link page-scroll" href="<?php echo base_url()?>homeweb/master" target="_blank">MASTER</a>
                      <a class="nav-link page-scroll" href="<?php echo base_url()?>homeweb/book_studio" target="_blank">ENGINEER</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
      </div>
    </div><!-- container -->
  </section>