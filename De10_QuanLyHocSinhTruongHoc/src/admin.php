<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css"
        integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <title>admin</title>
</head>

<body>
    <div class="container">
        <h1>Admin </h1>
        <h3>Hi, <?php echo "admin" ?></h3>
        <div class="row">
            <div class="col-md-12">

                <div class="Admin">
                    <h4>Thông Tin Admin</h4>
                    <a href="addadmin.php"><i class="bi bi-person-plus-fill"></i>Thêm admin</a>
                    <div class="table-responsive" id="employee_table">
                        <table class="table table-bordered">

                            <tr>
                                <th width="">A_STT</th>
                                <th width="">A_Name</th>
                                <th width="">A_Email</th>
                                <th width="">A_PASS</th>
                                <th width="">A_Date</th>
                                <th width="">Sửa Thông Tin</th>
                                <th width="">Xóa Thông Tin</th>
                            </tr>
                            <?php
                            include('connect.php');
                            $sql = "SELECT * FROM ADMIN";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["A_STT"]; ?></td>
                                <td><?php echo $row["A_Name"]; ?></td>
                                <td><?php echo $row["A_Email"]; ?></td>
                                <td><?php echo $row["A_PASS"]; ?></td>
                                <td><?php echo $row["A_Date"]; ?></td>

                                <td><a href="updateadmin.php?idsua=<?php echo $row["A_Email"]; ?>" ><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                <td><a href="processadmin.php?id=<?php echo $row["A_Email"]; ?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>


                            </tr>
                            <?php
                            }
                            mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </div>




            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="giaovien">
                    <h4>Thông Tin Giáo Viên</h4>
                    <a href="addgiaovien.php"><i class="bi bi-person-plus-fill"></i>Thêm Giáo Viên</a>
                    <div class="table-responsive" id="employee_table">
                        <table class="table table-bordered">

                            <tr>
                                <th width="">STT</th>
                                <th width="">MaGV</th>
                                <th width="">TenGV</th>
                                <th width="">GioiTinh</th>
                                <th width="">NgaySinh</th>
                                <th width="">DiaChi</th>
                                <th width="">SDT</th>
                                <th width="">Sửa Thông Tin</th>
                                <th width="">Xóa Thông Tin</th>



                            </tr>
                            <?php
                            include('connect.php');
                            $sql = "SELECT * FROM GIAOVIEN";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["STT"]; ?></td>
                                <td><?php echo $row["MaGV"]; ?></td>
                                <td><?php echo $row["TenGV"]; ?></td>
                                <td><?php echo $row["GioiTinh"]; ?></td>
                                <td><?php echo $row["NgaySinh"]; ?></td>
                                <td><?php echo $row["DiaChi"]; ?></td>
                                <td><?php echo $row["SDT"]; ?></td>
                                <td><a href="updategiaovien.php?idsua=<?php echo $row["MaGV"]; ?>" >
                                <i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                <td><a href="processgiaovien.php?id=<?php echo $row["MaGV"]; ?>">
                                <i class="bi bi-trash-fill"></i>Xóa</a></td>


                            </tr>
                            <?php
                            }
                            mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </div>




            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="hocsinh">
                    <h4>Thông Tin Hoc Sinh</h4>
                    <a href="addhocsinh.php"><i class="bi bi-person-plus-fill"></i>Thêm Hoc Sinh</a>
                    <table class="table table-bordered">
                        <tr>
                            <th width="">STT</th>
                            <th width="">MaHS</th>
                            <th width="">TenHs</th>
                            <th width="">GioiTinh</th>
                            <th width="">TenLop</th>
                            <th width="">Ngaysinh</th>
                            <th width="">DiaChi</th>
                            <th width="">SDT</th>
                            <th width="">Sửa Thông Tin</th>
                            <th width="">Xóa Thông Tin</th>
                        </tr>
                        <?php
                        include('connect.php');
                        $sql = "SELECT * FROM HOCSINH";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["STT"]; ?></td>
                            <td><?php echo $row["MaHS"]; ?></td>
                            <td><?php echo $row["TenHS"]; ?></td>
                            <td><?php echo $row["GioiTinh"]; ?></td>
                            <td><?php echo $row["TenLop"]; ?></td>
                            <td><?php echo $row["NgaySinh"]; ?></td>
                            <td><?php echo $row["DiaChi"]; ?></td>
                            <td><?php echo $row["SDT"]; ?></td>
                            <td><a href=""><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                            <td><a href="processhocsinh.php?id=<?php echo $row["MaHS"]; ?>"><i
                                            class="bi bi-trash-fill"></i>Xóa</a></td>

                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Thông Tin Ket Qua Hoc Sinh</h4>
                <a href="addketqua.php"><i class="bi bi-person-plus-fill"></i>Thêm Kết Quả Hoc Sinh</a>
                <div class="ketqua">
                    <div class="table-responsive" id="employee_table">
                        <table class="table table-bordered">
                            <tr>
                                <th width="">STT</th>
                                <th width="">MaHS</th>
                                <th width="">TenHS</th>
                                <th width="">Gioi Tinh</th>
                                <th width="">Ten Lop</th>
                                <th width="">Diem Van</th>
                                <th width="">Diem Toan</th>
                                <th width="">Diem Anh</th>
                                <th width="">Diem Ly</th>
                                <th width="">Diem Hoa</th>
                                <th width="">Diem Sinh</th>
                                <th width="">Sửa Thông Tin</th>
                                <th width="">Xóa Thông Tin</th>

                            </tr>
                            <?php
                            include('connect.php');
                            $sql = "SELECT * FROM KETQUA";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["STT"]; ?></td>
                                <td><?php echo $row["MaHS"]; ?></td>
                                <td><?php echo $row["TenHS"]; ?></td>
                                <td><?php echo $row["GioiTinh"]; ?></td>
                                <td><?php echo $row["TenLop"]; ?></td>
                                <td><?php echo $row["DiemVan"]; ?></td>
                                <td><?php echo $row["DiemToan"]; ?></td>
                                <td><?php echo $row["DiemAnh"]; ?></td>
                                <td><?php echo $row["DiemLy"]; ?></td>
                                <td><?php echo $row["DiemHoa"]; ?></td>
                                <td><?php echo $row["DiemSinh"]; ?></td>
                                <td><a href=""><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                <td><a href="processketqua.php?id=<?php echo $row["MaHS"]; ?>"><i
                                            class="bi bi-trash-fill"></i>Xóa</a></td>



                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Thông Tin Phụ Huynh Hoc Sinh</h4>
                <a href="addphuhuynh.php"><i class="bi bi-person-plus-fill"></i>Thêm Phụ Huynh Hoc Sinh</a>
                <div class="phuhuynh">
                    <div class="table-responsive" id="employee_table">
                        <table class="table table-bordered">
                            <tr>
                                <th width="">STT</th>
                                <th width="">MaHS</th>
                                <th width="">TenHs</th>
                                <th width="">TenLop</th>
                                <th width="">TenBo</th>
                                <th width="">TenMe</th>
                                <th width="">Email</th>
                                <th width="">SDT</th>
                                <th width="">DiaChi</th>
                                <th width="">Sửa Thông Tin</th>
                                <th width="">Xóa Thông Tin</th>

                            </tr>
                            <?php
                            include('connect.php');
                            $sql = "SELECT * FROM PHUHUYNH";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["STT"]; ?></td>
                                <td><?php echo $row["MaHS"]; ?></td>
                                <td><?php echo $row["TenHS"]; ?></td>
                                <td><?php echo $row["TenLop"]; ?></td>
                                <td><?php echo $row["TenBo"]; ?></td>
                                <td><?php echo $row["TenMe"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["SDT"]; ?></td>
                                <td><?php echo $row["DiaChi"]; ?></td>
                                <td><a href=""><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                <td><a href="processphuhuynh.php?id=<?php echo $row["MaHS"]; ?>"><i
                                            class="bi bi-trash-fill"></i>Xóa</a></td>



                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
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