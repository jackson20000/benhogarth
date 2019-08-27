<style>
    .book_section {
        padding:14% 10%;    
    }
    .book_section  #book-div{
        text-align:center;
        font-size:32px;
    }
    .book_section .submit_book{
        padding:5px 19px;   
        box-sizing: border-box;
        border-radius: 5px; 
        background-color:#9c9c9c;
        color:black;
    }
    @media screen and (max-width: 768px) {
    .book_section  #book-div{
       margin-bottom:16px;
        font-size:25px;
    }
  
    }
</style>
<section style="background-color:black;color:white;">
    <div class="book_section">
        <div class="row">
            <div class="col-md-4" id="book-div">
            Writing rate @ $40 / hour
            </div>
            <div class="col-md-4" id="book-div">
            Recording rate @ $50 / hour
            </div>
            <div class="col-md-4" id="book-div">
            Day rate @ $600 / day
            </div>
        </div>
        <div style="text-align:center;padding:60px 0px;font-size:25px">
           <a href="<?php echo base_url()?>homeweb/booking"> <button type="submit" class="submit_book">Book</button></a>
        </div>
    </div>
</section>