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

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">


                <h2 align="center">Add Admin</h2>
                <br /><br /><br />
                <form action="processadmin.php" method="POST">
                <div class="mb-3">
                        <label for="exampleInputTenGV" >A_Email</label>
                        <input type="email" name="A_Email" class="form-control" id="exampleInputA_Email" aria-describedby=""  placeholder="Enter A_Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMaGV" >A_Name</label>
                        <input type="text" name="A_Name" class="form-control" id="exampleInputA_Name" aria-describedby=""  placeholder="Enter A_Name" >
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputGioiTinh" >A_PASS</label>
                        <input type="text" name="A_PASS" class="form-control" id="exampleInputA_PASS" aria-describedby=""  placeholder="Enter A_PASS">
                    </div>
                    
                    <button type="submit" name="btnadmin" class="btn btn-primary">Thêm Admin</button>
                </form>
               

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