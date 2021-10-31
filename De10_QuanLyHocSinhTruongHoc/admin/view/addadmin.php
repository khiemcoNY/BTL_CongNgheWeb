<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Addadmin</title>
</head>
<style>
    .style1{
        border: 2px solid black;
        padding:40px;
        margin-top:70px;
        border-radius: 15px;
        background-color: #ccc;

    }
    .style1 h2{
        color: white;
    text-shadow: 1px 1px 2px black, 0 0 40px rgb(34, 34, 36), 0 0 13px rgb(32, 32, 34);
    }
    .style1 form label{
        margin-bottom: 10px;

    }
</style>

<body>
<?php
      session_start();
        if(!isset($_SESSION['login_ok'])){
             header("Location:../../site/view/loginadmin.php");
        }
        
?>
    <div class="container">

        <div class="row">
            <div class="col-md-12 style1">

                <h2 align="center">Thêm Tài Khoản Admin</h2>
                <br /><br /><br />
                <form action="../controller/processadmin.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputTenGV" >Your Email</label>
                        <input type="email" name="A_Email" class="form-control" id="exampleInputA_Email" aria-describedby=""  placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMaGV" >Your Name</label>
                        <input type="text" name="A_Name" class="form-control" id="exampleInputA_Name" aria-describedby=""  placeholder="Enter Your Name" >
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputGioiTinh" >Your PASS</label>
                        <input type="text" name="A_PASS" class="form-control" id="exampleInputA_PASS" aria-describedby=""  placeholder="Enter Your PASS">
                    </div>
                    
                    <button type="submit" name="btnadmin" class="btn btn-primary">Thêm Admin</button>
                </form>
            </div>
         </div>
    </div>

                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>