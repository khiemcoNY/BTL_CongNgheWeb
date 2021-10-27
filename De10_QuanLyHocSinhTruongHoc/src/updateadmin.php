<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update ADMIN</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 align="center">Update ADMIN</h2>
            <form action="processadmin.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputMaGV" >Email</label>
                        <input type="text" name="Up_A_Email" class="form-control" id="exampleInputA_Email" aria-describedby=""  placeholder="Nhập vào A_Email" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTenGV" >Name</label>
                        <input type="text" name="Up_A_Name" class="form-control" id="exampleInputA_Name" aria-describedby=""  placeholder="Nhập vào A_Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGioiTinh" >PASS</label>
                        <input type="text" name="Up_A_PASS" class="form-control" id="exampleInputA_PASS" aria-describedby=""  placeholder="Nhập vào A_PASS">
                    </div>
                    
                    <button type="submit" name="btnUpAD" class="btn btn-primary">Cập nhật thông tin</button>
                </form>
            </div>
        </div>
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