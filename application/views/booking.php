
    <style>
* {
  box-sizing: border-box;
}
#myInput {
  /*background-image: url('ben-ap/css/searchicon.png');*/
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 5px 5px 5px 10px;
  margin-left: 15px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>

    <!-- section -->
    <div class="art_section" style="background-color: #ffffff;">
        <div class="container"  style="background-color: #ffffff;">
            <h1 class="head_art" style="color:black;margin-top:0px; ">Booking</h1>
        </div>
    </div>
    <!-- section -->
        <div class="row" style="margin: 0!important">
            <div class="col-lg-12">
                <div class="container" style="padding-right:0!important">
                    <!--<h1 class="studio">Premium Studios</h1>-->
                    <!--<p class="studio_p">Our selection of studios verified by our team</p>-->
 
                   

                <div class="studio_display" style="display:inline-block;width:100%">
                    <!--<div id="search-criteria">-->
                    <!--    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Studio" title="Type in a name" />    -->
                    <!--    <br>-->
                    <!--</div>-->

                    <div class="headstd" ><b style=""></b> 
                    </div>
                    <div class="headstd"><b>Studio Name</b> <img src="<?php echo base_url()?>assets/frontend/images/descendant.png" style="height:14px;" id="sortbtn"/>
                    </div>
                    <div class="headstd"><b>Rate</b> <img src="<?php echo base_url()?>assets/frontend/images/descendant.png" style="height:14px;" id="sortbtn1"/>
                    </div>
                        <?php $i=0;foreach ($list as $studio) { ?>
                         <div class="col-md-12 col-sm-6 datas studios_list" id="datas"  style="padding: 5px 0" >
                         <a href="<?php echo base_url('homeweb/request_book?sid=').$studio['id'];?>">

                        <div class="col-lg-4"> 
                            <div class="studio_1">
                                <a href="<?php echo base_url('homeweb/request_book?sid=');echo $studio['id']  ?>">
                                <img src="<?php echo base_url().$studio['img_bk']?>" alt="Image not found" height="250px;">
                                </a>
                            </div>   
                        </div>
                    </a> 

                        <ul id="studio_sort"> 
                            <div class="studio_details">
                                <div class="details_section2">
                                    <div class="studio_name">
                                       <li> <p style=" margin-top: 12px;"><?php echo $studio['name']?></p></li>
                                    </div>  
                                    <div class="rate">
                                        <li> <p style="margin-top: 12px; margin-right: 70px;">$<?php echo $studio['rate']?></p></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        
                    </div>
                        <?php $i++; } ?>
                    
                </div>
                </div>
            </div>
            <!-- <div class="col-lg-6" style="padding: 0px 0px 0px 0!important">
                <div class="custom_map">
                    <div id="map"></div>       
                </div>
            </div> -->
        </div>

<script type="text/javascript">
    var order =1;
    function sortUL(selector) {
    var $ul = $(selector);
    $ul.find('.datas').sort(function (a, b) {
    var upA = $(a).text().toUpperCase();
    var upB = $(b).text().toUpperCase();
    return (upA < upB) ? order : (upA > upB) ? -order : 0;
}). appendTo(selector);

};
 $(document).ready(function () {
 $('#sortbtn').click(function(){
 sortUL(".studio_display");
 order =order*-1;
 });
 });
</script>
<script type="text/javascript">
    var position =1;
    function sortULa(selector) {
    var $ul = $(selector);
    $ul.find('.datas').sort(function (a, b) {
    var upA = $(a).text().toUpperCase();
    var upB = $(b).text().toUpperCase();
    //return (upA < upB) ? order : (upA > upB) ? -order : 0;
    var numberA = Number(upA.replace(/[^0-9\.]+/g, ""));
    var numberB = Number(upB.replace(/[^0-9\.]+/g, ""));
    return (numberA - numberB) < 0 ? position : -position;
 // return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
}). appendTo(selector);
};
 $(document).ready(function () {
 $('#sortbtn1').click(function(){
 sortULa(".studio_display");
 position = position*-1;
 });
 });
      
// search box

function myFunction() {
    var input, filter, ul,li, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = $('.datas');
    li = ul.find('.studio_name');
  //li = ul.find('.rate');

    // console.log(li);
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[0];
        // console.log(a);
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].closest(".datas").style.display = "";
        } else {
            li[i].closest(".datas").style.display = "none";
        }
    }
}

</script>
<!--------------Map<----------------->
