<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
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
</style>

<body>
    <div class="message">
       
        <form action="process-message.php" method="POST">
            <div class="mb-3">
                <a href=""><i class="bi bi-x-circle-fill"></i></a>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>