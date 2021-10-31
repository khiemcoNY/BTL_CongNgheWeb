<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin</title>
</head>
<style>
.style1 {
    border: 2px solid black;
    padding: 40px;
    margin-top: 70px;
    border-radius: 15px;
    background-color: #ccc;

}

.style1 h2 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 40px rgb(34, 34, 36), 0 0 13px rgb(32, 32, 34);
}


</style>
<body>
<?php
      session_start();
        if(!isset($_SESSION['login_ok'])){
             header("Location:../../site/view/loginadmin.php");
        }
        
?>
    <?php
        $TenHS= "";
        $GioiTinh= "";
        $TenLop= "";
        $GioiTinh= "";
        $NgaySinh= "";
        $DiaChi= "";
        $SDT= "";

        
    if(isset($_GET['idsua'])){
        include('../../configs/connect.php');
        $E= $_GET['idsua'];
        $sql = "SELECT * FROM HOCSINH where MaHS='$E'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0){
            $row = mysqli_fetch_assoc($result);
            $TenHS= $row["TenHS"];
            $GioiTinh= $row["GioiTinh"];
            $TenLop= $row["TenLop"];
            $NgaySinh= $row["NgaySinh"];
            $DiaChi= $row["DiaChi"];
            $SDT= $row["SDT"];

            
        }   
    }
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 style1">
                <h2 align="center">Update hoc sinh</h2>
                <form action="../controller/processhocsinh.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputMaHS">MaHS </label>
                        <input type="text" name="Up_MaHS" class="form-control" id="exampleInputMaHS" readonly
                            aria-describedby="" placeholder="Enter MaHS" value="<?php echo $_GET["idsua"]; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenHS">TenHS </label>
                        <input type="text" name="Up_TenHS" class="form-control" id="exampleInputTenHS"
                            aria-describedby="" value="<?php echo $TenHS?>" placeholder="Enter TenHS">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputGioiTinh">GioiTinh </label>
                        <input type="text" name="Up_GioiTinh" class="form-control" id="exampleInputGioiTinh"
                            aria-describedby="" value="<?php echo $GioiTinh?>" placeholder="Enter GioiTinh">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenLop">TenLop </label>
                        <input type="Text" name="Up_TenLop" class="form-control" id="exampleInputTenLop"
                            aria-describedby="" value="<?php echo $TenLop?>" placeholder="Enter TenLop">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputNgaySinh">NgaySinh </label>
                        <input type="Text" name="Up_NgaySinh" class="form-control" id="exampleInputNgaySinh"
                            aria-describedby="" value="<?php echo $NgaySinh?>" placeholder="Enter NgaySinh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiaChi">DiaChi</label>
                        <input type="Text" name="Up_DiaChi" class="form-control" id="exampleInputDiaChi"
                            aria-describedby="" value="<?php echo $DiaChi?>" placeholder="Enter DiaChi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">SDT</label>
                        <input type="text" name="Up_SDT" class="form-control" id="exampleInputSDT" aria-describedby=""
                            value="<?php echo $SDT?>" placeholder="Enter SDT">
                    </div>
                    <button type="submit" style="margin-top:10px;" name="btnUpHS" class="btn btn-primary">Cập Nhật Thông Tin</button>
                </form>
                <br /><br /><br />
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