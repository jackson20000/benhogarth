<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/index.css">
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
<style>
    .head_icon li{
    display:inline-block;
    }
    .head_icon .head_newicon{
     padding:0px 10px;
    }
    .head_icon li a{
    color:white;
    }
    .viewmore{
      transition: transform .8s;
    }
    .viewmore:hover{
      transform: scale(1.3);
    }
    .head_icon{
      margin:0px 1%;
      color:white;
    }
    .head_newicon .navbar{
      min-height:unset;
      margin-bottom:0px;
    }
    .menu-bg .navbar-nav .active {
      color: #f2292e !important;
    }
    #contact-foot .form-control {
      width:50%;
      margin-bottom: 10px;
      padding: 15px 30px;
      font-size: 14px;
      border-radius: 30px;
      text-align: center;
      border: 1px solid #a7a6a685;
      box-shadow: 6px 0px 43px rgba(131, 131, 131, 0.13);
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      transition: all 0.3s;
        display: inline;
      background: #e9e9e9;
  }

    #contact-foot .form-control:focus {
      border: 1px solid #9c9c9c;
      outline: none;
      box-shadow: none;
    }

    #contact-foot {
      background: #ffffff;
      padding-bottom: 20px;
      position: relative;
      text-align: center;
    }
    #contact-foot .submit-button #submit{
      background: #333;
      color: white;
    }

    .up:hover.overlay {
      background-color:#9999999;
    }
    @media screen and (max-width: 768px) {
      .head_icon .head_newicon{
      padding:0px 4px;
      }
      .head_icon{
        margin:0px; 
      }
    }

</style>
<body>
    <!-- header -->
    <header role="header">
        <div class="container head_logo">
            <!-- logo -->
            <!--<div>-->
            <!--    <a href="<?php echo base_url()?>" title="Benhogarth"><img src="<?php echo base_url()?>assets/frontend/images/logo1.png" title="Benhogarth" alt="Benhogarth"-->
            <!--            style="height:90px" /></a>-->
            <!--</div>-->
            <!--<div class="up" style="margin-right: 75px;margin-top:-74px;">-->
            <!--    <a href="<?php echo base_url()?>homeweb/upload" title="upload" class="myclass"><img src="<?php echo base_url()?>assets/frontend/images/Upload-128.png" title="upload" alt="upload" id="up"-->
            <!--          style="height:50px; float:right; border-radius:5px; " /></a>-->
            <!--</div>-->
            
            <!-- logo -->
            <!-- nav -->
            <!--<nav role="header-nav" class="navy" >-->
            <!--    <ul>-->
            <!--        <li class="nav-active"><a href="<?php echo base_url()?>" title="Home">Home</a></li>-->
                    <!-- <li><a href="<?php echo base_url()?>homeweb/about" title="Home">About</a></li><-->
                    <!--<li><a href="<?php echo base_url()?>homeweb/discography" title="Discography">Discography</a></li>-->
            <!--        <li><a href="<?php echo base_url()?>homeweb/booking" title="Artists">Booking</a></li>-->
            <!--        <li><a href="<?php echo base_url()?>homeweb/upload" title="Artists">Upload</a></li>-->
                 <!--    <li><a href="#contact" title="Contact">Contact</a></li> -->
            <!--    </ul>-->
            <!--</nav>-->
            <!-- nav -->
        </div>
    </header>
    <!-- header -->

  <!-- section -->
  
<!--<div class="about_section">-->
<!--  <div class="sewl-about-me" style="background-image: url('<?php echo base_url()?>assets/frontend/images/headshot.jpg');min-height:100vh;">-->
<!--    <div class="about-me-wrap">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="about-inner-wrap">-->
<!--            <div class="vertical-scrollbox mCustomScrollbar _mCS_1 mCS-autoHide"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">-->
<!--              <div class="vc_row wpb_row vc_row-fluid sewl-dhav-dotted"><div class="wpb_column vc_column_container text-left vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">-->
<!--         <div class="wpb_text_column wpb_content_element ">-->
<!--         <div class="wpb_wrapper">-->
      
<!--         <div class="about-info-list ">-->
            
<!--              <p style="color: #eeeeee;">Ben Hogarth is a recording, mixing, mastering engineer. His interest in music began at a young age in the small state of South Dakota. After growing up playing drums and piano, he ran sound for his dad’s church and fell in love with operating sound boards and the art of sound. From there, he pursued his passion in music and audio and attended McNally Smith College of Music, where he graduated in the Spring of 2015 with a Bachelor of Science in Music Production. <span id="dots">......</span></p>-->
<!--              <p style="color: #eeeeee; "><span id="more" style="color: #eeeeee; ">Ben has over seven years of experience working in commercial studios in the Twin Cities and Los Angeles area, including The Hideaway Studio, iHeart Media, The Boom Boom Room, Paramount Studios, Conway Studios, Record Plant, Westlake Studios, Glenwood Studios, No Excuses/Interscope Studios, No Name Studios, Blackbird Studios, and many more. He has also worked as Playback Engineer for Jason Derulo over the past two years, working shows in 20+ countries around the world.</span></p>-->
<!--              <p style="color: #eeeeee; "><span id="more1" style="color: #eeeeee; ">Over time, Ben has worked with artists and bands such as Jason Derulo, Chris Brown, Florida Georgia Line, DNCE, T.I., Omarion, Austin Mahone, T-Pain, Pia Mia, Kid Ink, Jeremih, King Los, 21 Savage, SZA, Travis Scott, ASAP Ferg, ASAP Rocky, Ty Dolla $ign, CL, Lukas Nelson, Wale, Joey Bada$$, Ashlee Simpson, Evan Ross, DJ White Shadow, Lil Bibby, G Herbo, Waka Flocka Flame, Hitmaka, Arin Ray, Syph, Verse Simmonds, Leon Thomas, Jovanie, Raury, Keith Ape, Chaz French, Chris Webby, Jocko Sims, Ricky Hil, Mario, Trevor Jackson, Michael Baker, American Authors, Sam Hunt, Neon Trees, O.A.R., Delta Rae, Lauren Becker and many others. On radio, he has also radio broadcasted for the Minnesota Vikings.</span></p>-->
<!--              <button onclick="myFunction()" id="myBtn">Read more</button>-->
<!--         </div>-->
        
              
              

<!--      </div>-->
<!--   </div>-->
<!--</div></div></div></div>-->
<!--            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 27px; max-height: 168px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  </div>-->
  

  

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
    </div>
  </section>


  <div id="fh5co-main">
    <div class="fh5co-gallery">
      <a class="gallery-item">
          <?php foreach ($discography as $show) {
    //print_r($list);
     ?>
         <a class="gallery-item" href="<?php echo $show['url'] ?>" target="_blank">
        <img src="<?php echo base_url().$show['image']?>" style="height:100%;">
        <span class="overlay">
        <h2><?php echo $show['heading'] ?></h2>
        <h2 style="font-size:20px;"><?php echo $show['name'] ?></h2>
        </span>
      </a>
    <?php }?>
    <span id="discodata"></span>
    </div>
  </div>

  <section id="view" class="wrapper"style="background-color:#ffffff;padding:0px;">
    <div class="container text-center">
      <div class="view" style="background-color:#ffffff;margin-bottom:15px;">
      <!--  <a onclick="viewmore()" title="viewmore" style="color:black;" id="viewmore"><img class="viewmore" src="<?php echo base_url()?>assets/frontend/images/dropdown.png" style="height:55px;"></a> -->

      </div></div>
    </div>
  </section>

  <!-- book and upload -->
          
  <!--<section id="book" class="">-->
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-md-6" style="margin-bottom:15px;">-->
  <!--      <a href="<?php echo base_url()?>homeweb/booking " ><img class="hvr-efft" src="<?php echo base_url()?>assets/frontend/images/booknow.png" alt="booknow"  style="width:100%" />-->
  <!--      <h2 class="effect-shine" style="color: white;margin: auto;text-align: center;position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">Book Now</h2>-->
  <!--      </a>-->
                               
  <!--      </div>-->
  <!--      <div class="col-md-6" style="margin-bottom:15px;">-->
  <!--        <a href="<?php echo base_url()?>homeweb/upload " ><img class="hvr-efft" src="<?php echo base_url()?>assets/frontend/images/upload.png" alt="upload"  style="width:100%" />-->
  <!--          <h2 class="effect-shine" style="color: white;margin: auto;text-align: center;position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">Upload File</h2>-->
  <!--        </a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- book and upload -->
  
  <!-- Contact form-->
  <!--<div>-->
  <!--<section id="contact-foot">-->
  <!--          <div class="container">-->
  <!--               <div class="contact-head" style="color:black;">-->
  <!--                  <h2 style="font-size:30px;font-weight:600;margin-bottom:30px;">Contact Us</h2>-->
  <!--              </div>-->
  <!--                  <form id="contactForm" method="post">-->
  <!--                    <div class="row">-->
  <!--                      <div class="col-md-12">-->
  <!--                        <div class="form-group">-->
  <!--                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required-->
  <!--                            data-error="Please enter your name">-->
  <!--                        </div>-->
  <!--                      </div>-->
  <!--                      <div class="col-md-12">-->
  <!--                        <div class="form-group">-->
  <!--                          <input type="email" placeholder="Email" id="email" class="form-control" name="email" required-->
  <!--                            data-error="Please enter your email">-->                     
  <!--                        </div>-->
  <!--                      </div>-->
  <!--                      <div class="col-md-12">-->
  <!--                        <div class="form-group">-->
  <!--                          <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required=""-->
  <!--                            data-error="Please enter your subject">-->
                          
  <!--                        </div>-->
  <!--                      </div>-->
  <!--                      <div class="col-md-12">-->
  <!--                        <div class="form-group">-->
  <!--                          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="7"-->
  <!--                            data-error="Write your message" required></textarea>-->
                           
  <!--                        </div>-->
  <!--                        <div class="submit-button">-->
  <!--                          <button class="btn btn-common btn-effect" id="submit" type="submit">Submit</button>-->
  <!--                          <div id="msgSubmit" class="h3 hidden"></div>-->
  <!--                          <div class="clearfix"></div>-->
  <!--                        </div>-->
  <!--                      </div>-->
  <!--                    </div>-->
  <!--                  </form>-->
  <!--          </div>-->
  <!--        </section>-->
  <!--</div>-->
  <!--Contact form-->


 <!-- use this for popup-->
  <div id="boxes">
    <div style="top: 199.5px; left: 350px; display: none;" id="dialog" class="window">Enter your details to Continue
      <div id="popupfoot">
        <div id="popup-details">
          <form class="popup-form" method="post">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>  
              <div class="col-md-8"> 
                <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>  
              <div class="col-md-8"> 
                <input  name="telephone" placeholder="Phone No:" class="form-control"  type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Email</label>  
              <div class="col-md-8"> 
                <input  name="email" placeholder="Email" class="form-control"  type="text" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Instagram Id</label>  
              <div class="col-md-8"> 
                <input  name="instaid" placeholder="Instagram Id" class="form-control"  type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Address</label>  
              <div class="col-md-8"> 
                <input  name="address" placeholder="Enter Address" class="form-control" type="text" required>
              </div>
            </div>
            <div class="form-group" style="text-align: center;">
              <input class="btn popup-btn close agree" type="submit" name="submit" value="Continue" >
              </div>
            </div>
          </form>
        </div>
     </div>
    </div>
    <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
  </div>
<!-- use this for popup-->
<style>

.load-more-container ul {
  list-style-type: none;
  padding: 0;
}
.load-more-container ul:after {
  content: "";
  display: table;
  clear: both;
}

.load-more-container ul li:nth-child(1n + 7) {
  max-height: 0;
  opacity: 0;
  transition: 0.1s ease-in;
}
.load-more-container ul li {
}

.load-more-container .load-more-btn .loaded {
  display: none;
}
.load-more-container #load-more {
  display: none;
}
.load-more-container #load-more:checked ~ ul li:nth-child(1n +7) {
  max-height: 999px;
  opacity: 1;
  transition: 0.2s ease-in;
}
.load-more-container #load-more:checked ~ .load-more-btn .loaded {
  display: block;
}
.load-more-container #load-more:checked ~ .load-more-btn .unloaded {
  display: none;
}
#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
  border-radius: 10px;
  text-align: center;
}
#boxes #dialog {
  width:600px; 
  height:auto;
  padding:10px;
  background-color:#ffffff;
  font-size: 15pt;
}
.maintext{
  text-align: center;
  text-decoration: none;
}
#popup-details{
  font-size: 12pt;
  text-align: left;
}
#popup-details .popup-form .form-control{
  height:35px;
  margin-bottom:25px;
}
#popup-details .popup-form .form-control:active,
#popup-details .popup-form .form-control:focus{
 border-color:#a7a7a7cf;
}
#popupfoot{
  font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
  text-decoration: none;
}
.popup-btn a{
  color:white; 
}
.popup-btn {
  background:#545252;
  color:white; 
}

.popupoption:hover{
  background-color:#D1D1D1;
  color: green;
}
.popupoption2:hover{
  
  color: red;
}
.close:focus, .close:hover{
  opacity:unset;
  color:white;
}
.close{
     float: none; 
    font-size: 21px;
     font-weight: 400; 
    line-height: 1;
    color: white;
    text-shadow: unset;
    filter: alpha(opacity=20);
    opacity: unset;
}
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var moreText1 = document.getElementById("more1");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    moreText1.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
    moreText1.style.display = "inline";
  }
}
</script>
<script>
function popup() {    

    var id = '#dialog';
  
    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
  
    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({'width':maskWidth,'height':maskHeight});
    
    //transition effect   
    $('#mask').fadeIn(500); 
    $('#mask').fadeTo("slow",0.9);  
  
    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();
              
    //Set the popup window to center
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);
  
    //transition effect
    $(id).fadeIn(2000);   
  
  //if close button is clicked
  $('.window .close').click(function (e) {
    //Cancel the link behavior
    // e.preventDefault();
    
    $('#mask').hide();
    $('.window').hide();
  });    
  
};

$(document).ready(function() {
var isshow = localStorage.getItem('isshow');
if (isshow== null) {
localStorage.setItem('isshow', 1);

// Show popup here
  popup();
}
});

</script>
<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	
   }
   else{
	
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];
     
    // Create the email and send the message
    $to = 'info@benhogarth.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact Form:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n\nMessage:\n$message\n\n";
    $headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";	
    mail($to,$email_subject,$email_body,$headers);
   }	

  if (isset($_POST['submit'])) { 
  $_SESSION['first_name'] = $_POST['first_name'];
  $_SESSION['telephone'] = $_POST['telephone'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['instaid'] = $_POST['instaid'];
  $_SESSION['address'] = $_POST['address'];

 } 
?>
 