<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update GIAOVIEN</title>
</head>
<style>
.style1 {
    border: 2px solid black;
    padding: 50px;
    margin-top: 50px;
    border-radius: 15px;
    background-color: #ccc;
}
.style1 from label{
    margin-bottom: 10px;
}

</style>
<body>
    <?php
       $TenGV= "";
       $GioiTinh= "";
       $NgaySinh= "";
       $DiaChi= "";
       $SDT= "";
        
    if(isset($_GET['idsua'])){
        include('connect.php');
        $E= $_GET['idsua'];
        $sql = "SELECT * FROM GIAOVIEN where MaGV='$E'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0){
            $row = mysqli_fetch_assoc($result);
            $TenGV= $row["TenGV"];
            $GioiTinh= $row["GioiTinh"];
            $NgaySinh= $row["NgaySinh"];
            $DiaChi= $row["DiaChi"];
            $SDT= $row["SDT"];

            
        }   
    }
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 style1">
                <h2 align="center">Update Giáo Viên</h2>
                <form action="processgiaovien.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputMaGV">Mã giáo viên</label>
                        <input type="text" name="Up_MaGV" class="form-control" id="exampleInputMaGV" readonly
                            aria-describedby="" value="<?php echo $_GET['idsua'] ?>"
                            placeholder="Nhập vào Mã giáo viên">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTenGV">Tên giáo viên</label>
                        <input type="text" name="Up_TenGV" class="form-control" id="exampleInputTenGV"
                            aria-describedby="" value="<?php echo $TenGV?>" placeholder="Nhập vào tên giáo viên">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGioiTinh">Giới tính</label>
                        <input type="text" name="Up_GioiTinh" class="form-control" id="exampleInputGioiTinh"
                            aria-describedby="" value="<?php echo $GioiTinh?>" placeholder="Nhập vào giới tính">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNgaySinh">Ngày sinh</label>
                        <input type="text" name="Up_NgaySinh" class="form-control" id="exampleInputNgaySinh"
                            aria-describedby="" value="<?php echo $NgaySinh?>" placeholder="Nhập vào ngày sinh">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDiaChi">Địa chỉ</label>
                        <input type="text" name="Up_DiaChi" class="form-control" id="exampleInputDiaChi"
                            aria-describedby="" value="<?php echo $DiaChi?>" placeholder="Nhập vào địa chỉ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSDT">Số điện thoại</label>
                        <input type="text" name="Up_SDT" class="form-control" id="exampleInputSDT" aria-describedby=""
                            value="<?php echo $SDT?>" placeholder="Nhập vào số điện thoại">
                    </div>
                    <button type="submit" name="btnUpGV" class="btn btn-primary">Cập nhật thông tin</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>