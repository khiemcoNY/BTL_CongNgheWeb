<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 align="center">Update Phụ huynh</h2>
                <form action="processphuhuynh.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputMaHS">Mã Học Sinh </label>
                        <input type="text" name ="Up_MaHS" class="form-control" id="exampleInputMaHS"  readonly aria-describedby=""
                        value ="<?php echo $_GET["idsua"]; ?>">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenHS">Tên Học Sinh </label>
                        <input type="text" name ="Up_TenHS" class="form-control" id="exampleInputTenHS" aria-describedby=""
                           >
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGioiTinh">Tên Lớp</label>
                        <input type="text" name ="Up_TenLop" class="form-control" id="exampleInputGioiTinh" aria-describedby=""
                            >
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenLop">Tên Bố </label>
                        <input type="Text" name ="Up_TenBo" class="form-control" id="exampleInputTenLop" aria-describedby=""
                           >
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNgaySinh">Tên Mẹ</label>
                        <input type="Text" name ="Up_TenMe" class="form-control" id="exampleInputNgaySinh" aria-describedby=""
                        >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiaChi">Email</label>
                        <input type="Text" name ="Up_Email" class="form-control" id="exampleInputDiaChi" aria-describedby=""
                           >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">SDT</label>
                        <input type="text" name ="Up_SDT" class="form-control" id="exampleInputSDT" aria-describedby=""
                          >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">Địa Chỉ</label>
                        <input type="text" name ="Up_DiaChi" class="form-control" id="exampleInputSDT" aria-describedby=""
                            >
                    </div>
                    <button type="submit" name ="btnUpPH"class="btn btn-primary">Cập Nhật Thông Tin</button>
                </form>
                <br /><br /><br />
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