<?php 
echo '
<style>
    .message form{
        padding:20px 15px;
        border: 1px solid blue;
        background-color: #ccc;
        max-height: 550px;
        max-width: 350px;
        z-index:50;
        border-radius:5px;
        position:absolute;
        right: 20px;
        bottom: 20px;
        visibility: hidden;
        

    }
    .message form a{
        font-size: 30px;
        float: right;
        margin-bottom: 20px;
        padding :5px;
        color:black;
    }
    .message form a:hover{
        
        color:blue;
    }
    
    .message form button{
        color:#fff;
        background-color: red;
        padding:8px;
        border-radius: 5px;
        font-size: 18px;
    }
   .icon{
       
        width: 80px;
        height:80px;
        position: absolute;
        border-radius: 50%;
        background-color: #ccc;
        z-index: 90;
        right: 70px;
        bottom: 100px;
        visibility: visible;

    }
    .icon p{
        position: absolute;
        top:5px;
        
        font-size: 20px;
        font-weight: 900;
        color:#fff;
        background-color: red;
        width: 25px;
        height:25px;
        margin:0;
        border-radius:50%;
        text-align: center;
        line-height: 25px;


    }
   
    .icon i{
        color: #0774ff;
        font-size: 60px;
        margin:0;
       
        

    }
</style>

<body>
    <div class="message">
        <div class="icon">
            
            <a href="#">
                <p>1</p>
                <i class="bi bi-messenger"></i>
            </a>
        </div>
       
        <form id="f_message" action="process-message.php" method="POST">
            <div class="mb-3">
                <a id="exit" href=""><i class="bi bi-x-circle-fill"></i></a>
                <br>
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="txtEmail" class="form-control" id="exampleFormControlInput1" placeholder="YourMail@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" placeholder="Type a message to Thủy Lợi...">Message</label>
                <textarea name ="txtMess"class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
            </div>
            <button name="btnMess"type="submit">Gửi</button>
        </form>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        $(document).ready(function(){
            $(".icon").click(function(){
             
              $(this).hide();
             $("#f_message").css({"visibility": "visible"});
             
            });
        });
        $(document).ready(function(){
            $(".exit").click(function(){
                $("#f_message").hide();
                $(".icon").css({"visibility": "visible"});
            });
        });
    </script>
 ';
 ?>