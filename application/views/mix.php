<style>
    .button-custom {
        width: 140px;
        height: 45px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    .button-custom:hover {
        background-color: gray;
        /* box-shadow: 0px 5px 5px gray; */
        color: #fff;
        transform: translateY(-7px);
    }
    .book_section {
        padding:12% 10%;    
    }
    .book_section  #book-div{
        text-align:center;
        font-size:25px;
    }
 
    @media screen and (max-width: 768px) {
        .book_section  #book-div{
            margin-bottom:16px;
            font-size:25px;
        }
  
    }
</style>
<section style="background-color:black;color:white;min-height:76.9vh;">
    <div class="book_section">
        <div class="row">
            <div class="col-md-6" id="book-div">
            Demo mix @ $600
            </div>
            <div class="col-md-6" id="book-div">
            Commercial mix @ $1500
            </div>
        </div>
        <div style="text-align:center;padding:50px 0px;font-size:25px">
           <a href=""> <button type="submit" class="button-custom">Mix</button></a>
        </div>
    </div>
</section>