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
            <h2 align="center">Update Kết Quả</h2>
                <form action="processketqua.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputMaHS">Ma Học Sinh</label>
                        <input type="text" name="Up_MaHS" class="form-control" id="exampleInputMaHS" aria-describedby="" placeholder="Enter Mã Học Sinh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenHS">Tên Học Sinh</label>
                        <input type="text" name="Up_TenHS" class="form-control" id="exampleInputTenHS" aria-describedby="" placeholder="Enter Ten Học Sinh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGioiTinh">Giới Tính</label>
                        <input type="text" name="Up_GioiTinh" class="form-control" id="exampleInputGioiTinh" aria-describedby="" placeholder="Enter Gioi Tinh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenLop">Tên Lớp</label>
                        <input type="text" name="Up_TenLop" class="form-control" id="exampleInputTenLop" aria-describedby="" placeholder="Enter Tên Lớp">
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputDiemVan">Điểm Văn</label>
                        <input type="text" name="Up_DiemVan" class="form-control" id="exampleInputDiemVan" aria-describedby="" placeholder="Enter Diem">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputDiemToan">Điểm Toán</label>
                        <input type="text" name="Up_DiemToan" class="form-control" id="exampleInputDiemToan" aria-describedby="" placeholder="Enter Diem Toan">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputDiemAnh">Điểm Anh</label>
                        <input type="text" name="Up_DiemAnh" class="form-control" id="exampleInputDiemAnh" aria-describedby="" placeholder="Enter Diem Anh">
                    </div>
                    <div class="form-group">
              
                    <label for="exampleInputDiemLy">Điểm Lý</label>
                        <input type="text" name="Up_DiemLy" class="form-control" id="exampleInputDiemLy" aria-describedby="" placeholder="Enter Diem Ly">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiemHoa">Điểm Hóa</label>
                        <input type="text" name="Up_DiemHoa" class="form-control" id="exampleInputDiemHoa" aria-describedby="" placeholder="Enter Diem Hoa">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiemSinh">Điểm Sinh</label>
                        <input type="text" name="Up_DiemSinh" class="form-control" id="exampleInputDiemSinh" aria-describedby="" placeholder="Enter Diem Sinh">
                    </div>
                   
                    
                    <button type="submit" name="btnUpKQ" class="btn btn-primary">Cập Nhật Kết Quả</button>
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