
    <div class="head_room_details">
        <img class="room_details" src="<?php echo base_url()?>assets/frontend/images/request_book/11.png" alt="" style="width:100%">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding:0px 35px;margin-bottom:50px;">
                <div class="room_content1">
                    <h4 style="color:#b2b2b2;">TOP-LINE STUDIO</h4>
                    <h1 class="room_content_h1"><?php echo $show[0]['name']; ?></h1>
                </div>
                <div class="room_content2">
                    <h4 style="color:#b2b2b2;">About this studio</h4>
                    <p><?php echo $show[0]['description']; ?>.</p>
                    <h4 style="color:#b2b2b2;">Studio webpage</h4>
                    <a href="<?php echo $show[0]['url']; ?>"><?php echo $show[0]['url']; ?></a>
                    <h4 style="color:#b2b2b2;margin-top:35px;">Minimum Booking</h4>
                    <p><?php echo $show[0]['mini_booking']; ?> hour minimum</p>
                    <h4 style="color:#b2b2b2;margin-top:35px;">Maximum Booking</h4>
                    <p><?php echo $show[0]['max_booking']; ?> hour minimum</p>
                    <h4 style="color:#b2b2b2;margin-top:35px;">Amenities</h4>
                    <p><?php echo $show[0]['amenities']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="booking_content">
                    <h4>$<?php echo $show[0]['rate']; ?> </h4>
                    <p><i class="fa fa-check" aria-hidden="true"></i> Audio Engineer Included</p>
                </div>
                <span id="err" style="color: red"></span>
                <form action="<?php echo base_url('homeweb/book') ?>" method="post" >
                    <div class="form-group start_date" style="margin-bottom: 30px;">
                        <label for="date">Date</label>
                        <input type="hidden" name="id" value="<?php echo $show[0]['id']; ?>">
                        <input id="datepicker" name="date" placeholder="Mon , May 13" type="text" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group start_time">
                                <label for="username">Start Time</label>
                                <input id="timepickerstart" name="start_time" placeholder="00:00" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group start_time">
                                <label for="username">End Time</label>
                                <input placeholder="00:00" type="text" name="end_time" id="timepickerend" class="form-control timepicker" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit"  class="button_book"  id="check" style="background-color:#ffffff;color:black; ">Request to Book</button>
                    <br><br><br>
                </form>
                <script>
                    document.getElementById("check").addEventListener("click", function(event){
                    var start_time = new Date();
                    var timeString = $('#timepickerstart').val();
                    var end = $('#timepickerend').val();
                    var datetimez =$('#datepicker').val();
                    var cur_date = new Date().toJSON().slice(0,10).replace(/-/g,'/');
                    var start_time = new Date('1970-01-01 '+ timeString + ' GMT+0530');
                    var end_time = new Date('1970-01-01 '+ end + ' GMT+0530');

                    if (datetimez != '') {
                        $('#err').html('');
                        if (timeString != '') {
                            $('#err').html('');
                            if (end != '') {
                                $('#err').html('');
                                var current_time = new Date().toLocaleTimeString();
                                current_time =  new Date('1970-01-01 '+ current_time + ' GMT+0530');
                                current_time.setMinutes(current_time.getMinutes()-5);
                                
                                 if(Date.parse(datetimez) < Date.parse(cur_date) ){
                                    $('#err').html('Please select Future Date');
                                    event.preventDefault();
                                }
                                else if ( ((end_time-start_time)/1000) < parseInt('<?php echo $show[0]['mini_booking']; ?>', 10)*3600 ){
                                    $('#err').html('Minimum booking is '+parseInt('<?php echo $show[0]['mini_booking']; ?>', 10)+' Hour');
                                    // alert("Time should be less than 4 hour");
                                    event.preventDefault();
                                }
                                else if ( ((end_time-start_time)/1000) > parseInt('<?php echo $show[0]['max_booking']; ?>', 10)*3600 ){
                                   $('#err').html('Maximum Booking time is '+parseInt('<?php echo $show[0]['mini_booking']; ?>', 10)+' Hour');
                                    // alert("Time should be less than 4 hour");
                                    event.preventDefault();
                                }
                                else if(end_time<start_time){
                                    $('#err').html('Start time should be smaller than end time!');
                                    // alert("start time should be smaller than end time!");
                                    event.preventDefault();
                                }
                                // alert(current_time);
                                else if(Date.parse(datetimez) == Date.parse(cur_date) && current_time >= start_time ){
                                    $('#err').html('Please select a Future time');
                                    event.preventDefault();
                                }
                                else{
                                    $('#err').html('');
                                }
                            }else{
                                event.preventDefault();
                                $('#err').html('Please select End time');
                            }

                        }else{
                            event.preventDefault();
                            $('#err').html('Please select start time');
                        }
                    }else{
                        $('#err').html('Please pick a date.');
                    }
                     });
                </script>
            </div>
        </div>
    </div>
  

