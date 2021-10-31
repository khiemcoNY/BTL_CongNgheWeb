<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>admin</title>
</head>
<style>
    .style1 {
        border: 2px solid black;
        padding: 50px;
        margin-top: 50px;
        border-radius: 15px;
        background-color: white;
    }

    .style1 from label {
        margin-bottom: 10px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    h4 {
        text-align: center;
    }

    .header li a,
    .process a ,
    .them{

        color: black !important;
        border: 1px solid red;
        margin: 0 5px;
        border-radius: 3px;
        text-align: center;
        font-size: 18px;
    }

    .header li a:hover,
    .process a:hover ,
    .them:hover{
        border-width: 2px;
        border-style: solid;
        border-color: red green blue yellow;
        border-radius: 7px;
        text-shadow: 0 0 25px rgba(4, 253, 87, 0.986), 0 0 7px rgb(253, 249, 7);
    }

    .process a,.them {
        text-decoration: none;
        padding: 10px;
    }

    #home h3,h1{
        text-align: center !important;
        margin: 30px 0;
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 40px rgb(34, 34, 36), 0 0 13px rgb(32, 32, 34);
        font-size: 35px;
    }
</style>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['login_ok'])) {
        header("Location:site/view/loginadmin.php");
    }

    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container header">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gv">Giáo Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hs">Học Sinh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ph">Phụ Huynh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kq">Kết Quả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ad">Acount Admin</a>
                    </li>


                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link dangxuat" href="site/view/loginadmin.php">Đăng Xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="home">

        <h1>Quản Trị Viên </h1>
        <h3>Xin Chào Sếp, <?php echo $_GET['name'] ?></h3>
        <div class="row process">
            <div class="col-md-12">
                <a href="admin/controller/process-SendMailKQ.php">Gửi Mail TB Kết Quả</a>
            </div>
        </div>

        <!-- Bảng tài khoản admin -->
        <div class="row" id="ad">
            <div class="col-md-12 style1">
                <div class="Admin">
                    <h4>Thông Tin Tài khoản Admin</h4>
                    <a class="them" href="admin/view/addadmin.php"><i class="bi bi-person-plus-fill"></i>Thêm admin</a>
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
                            include('configs/connect.php');
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

                                    <td><a href="admin/view/updateadmin.php?idsua=<?php echo $row["A_Email"]; ?>"><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                    <td><a href="admin/controller/processadmin.php?id=<?php echo $row["A_Email"]; ?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>


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
        <!-- Bảng thông tin giao vien -->
        <div class="row" id="gv">
            <div class="col-md-12 style1">

                <div class="giaovien">
                    <h4>Thông Tin Giáo Viên</h4>
                    <a class="them" href="admin/view/addgiaovien.php"><i class="bi bi-person-plus-fill"></i>Thêm Giáo Viên</a>
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
                            include('configs/connect.php');
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
                                    <td><a href="admin/view/updategiaovien.php?idsua=<?php echo $row["MaGV"]; ?>">
                                            <i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                    <td><a href="admin/controller/processgiaovien.php?id=<?php echo $row["MaGV"]; ?>">
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
        <!-- Bảng thông tin học sinh -->
        <div class="row" id="hs">
            <div class="col-md-12  style1">
                <div class="hocsinh">
                    <h4>Thông Tin Hoc Sinh</h4>
                    <a class="them" href="admin/view/addhocsinh.php"><i class="bi bi-person-plus-fill"></i>Thêm Hoc Sinh</a>
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
                        include('configs/connect.php');
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
                                <td><a href="admin/view/updatehocsinh.php?idsua=<?php echo $row["MaHS"]; ?>"><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                <td><a href="admin/controller/processhocsinh.php?id=<?php echo $row["MaHS"]; ?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>

                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- Bảng thông tin Kết Quả -->
        <div class="row" id="kq">
            <div class="col-md-12 style1">
                <h4>Thông Tin Ket Qua Hoc Sinh</h4>
                
                <a class="them" href="admin/view/addketqua.php"><i class="bi bi-person-plus-fill"></i>Thêm Kết Quả Hoc Sinh</a>
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
                            include('configs/connect.php');
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
                                    <td><a href="admin/view/updateketqua.php?idsua=<?php echo $row["MaHS"]; ?>"><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                    <td><a href="admin/controller/processketqua.php?id=<?php echo $row["MaHS"]; ?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>



                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Bảng Thông tin Phụ Huynh -->
        <div class="row" id="ph" style="margin-bottom:50px">
            <div class="col-md-12 style1">
                <h4>Thông Tin Phụ Huynh Hoc Sinh</h4>
                <a class="them" href="admin/view/addphuhuynh.php"><i class="bi bi-person-plus-fill"></i>Thêm Phụ Huynh Hoc Sinh</a>
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
                            include('configs/connect.php');
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
                                    <td><a href="admin/view/updatephuhuynh.php?idsua=<?php echo $row["MaHS"]; ?>" ; ?><i class="bi bi-gear-wide-connected"></i>Sửa</a></td>
                                    <td><a href="admin/controller/processphuhuynh.php?id=<?php echo $row["MaHS"]; ?>"><i class="bi bi-trash-fill"></i>Xóa</a></td>



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

    <script>
        $(document).ready(function() {
            $(".dangxuat").click(function() {
                // $("#img-src").attr('src', 'images/' + $("#txtFruit").val() + '.jpg');
                var DX = 'dx';
                $.ajax({
                    url: 'site/view/loginadmin.php',
                    type: 'POST',
                    data: {
                        xacnhan: DX
                    },
                    success: function() {

                    }
                })
            });
        })
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>