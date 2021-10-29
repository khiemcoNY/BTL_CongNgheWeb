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
    <link rel="stylesheet" href="style.css">
    <title>Tra Cứu!</title>
</head>

<body>
    <!-- header -->
    <div id="home" class="container-fluid header">
        <div class="row ">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="../img/logo.jpeg" class="logo" alt=""></a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>Information</li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>Educate</li>
                                    </ul>
                                </li>

                            </ul>
                            <div class="login">
                                <a href="loginadmin.php">Đăng Nhập</a>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>


        </div>
    </div>
    <!-- slideshow -->
    <div class="container slideshow">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active slider">
                    <img src="../img/slide1.jpg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item slider">
                    <img src="../img/slide2.jpg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item slider">
                    <img src="../img/slide3.jpg" class="d-block w-100 " alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- main -->
    <div class="container-fluid main">
        <div class="row" style="margin:50px 0">
            <h3 class="title">Tra Cứu Kết Quả Học Tập - Năm Học 2021</h3>
            <div class="col-md"></div>
            <div class="col-md-8">

                <form action="index.php" class="d-flex" method="POST">
                    <input name="MaHS" class="form-control me-2" type="search" placeholder="Mã Học Sinh" aria-label="Search">
                    <button name="search" class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
            <div class="col-md"></div>

        </div>
        <div class="row">

            <div class="col-md-2">

                <!-- dropdown class -->
                <div class="dropdown" style="margin:20px 25px 50px ;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        --Chọn Lớp--
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                        <?php
                        include('connect.php');
                        $sql1 = "SELECT TenLop FROM LOP";
                        $result1 = mysqli_query($conn, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                            // output data of each row
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                echo ' <li><a class="dropdown-item" href="index.php?TenLop=' . $row1["TenLop"] . '">';
                                echo $row1["TenLop"];
                                echo '</a></li>';
                            }
                        } else {
                            echo "0 results";
                        }
                        mysqli_close($conn);
                        ?>

                    </ul>
                </div>
                <!-- dropdown Hoc Kỳ -->
                <div class="dropdown" style="margin:20px 25px 50px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        -- Học Kỳ --
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark HocKy" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Học Kỳ I</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item " href="">Học Kỳ II</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="table-responsive" id="employee_table" style="margin:25px 25px 25px 0">
                    <table class="table table-bordered">
                        <?php
                        echo "<tr>";
                        echo "<th>STT</th>";
                        echo "<th>MaHS</th>";
                        echo "<th>TenHS</th>";
                        echo "<th>Gioi Tinh</th>";
                        echo "<th>Ten Lop</th>";
                        echo "<th>Diem Van</th>";
                        echo "<th>Diem Toan</th>";
                        echo "<th>Diem Anh</th>";
                        echo "<th>Diem Ly</th>";
                        echo "<th>Diem Hoa</th>";
                        echo "<th>Diem Sinh</th>";

                        echo "</tr>";



                        if (isset($_POST["search"])) {
                            $MaHS = $_POST["MaHS"];

                            $sql = "SELECT * FROM KETQUA WHERE MaHS='$MaHS'";
                            include('process-Search.php');
                        } elseif (isset($_GET["TenLop"])) {
                            $TenLop = $_GET["TenLop"];
                            $sql = "SELECT * FROM KETQUA WHERE TenLop='$TenLop'";
                            include('process-Search.php');
                        } else {

                            $sql = "SELECT * FROM KETQUA";
                            include('process-Search.php');
                        }
                        echo "</table>";
                        ?>

                </div>
            </div>
        </div>

    </div>
    <!-- message -->
  
    <?php
    include('message.php');
    ?>
    <!-- footer -->
    <div id="contact" class="container-fluid">
        <div class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-facebook"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-instagram"></i></a>




                </section>
                <!-- Section: Form -->


                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../img/TLU-map.png" alt="">
                        </div>
                        <div class="col-md-4">
                            <br>
                            <ul class="foot-link">

                                <li><a href=""><i class="bi bi-geo-alt-fill"></i> Tây Sơn,Đông Đa</a></li>
                                <li><a href=""><i class="bi bi-telephone-fill"></i> +84 39699879666</a></li>
                                <li><a href=""><i class="bi bi-envelope-open-fill"></i> ThLoi@gmail.com</a></li>
                                <li>
                                    <hr>
                                    <hr>
                                </li>


                            </ul>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <p>
                                VIỆN ĐÀO TẠO MIỀN Bắc <br>
                                Địa chỉ: Số 115 Trần Phú <br>
                                Điện thoại: (0259) 3823027<br>
                                <hr>
                                <hr>
                            </p>
                        </div>



                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 :
                <a class="text-white" href="https://mdbootstrap.com/">Trường THPT Thủy Lợi</a>
            </div>
            <!-- Copyright -->
        </div>
        <!-- Footer -->
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