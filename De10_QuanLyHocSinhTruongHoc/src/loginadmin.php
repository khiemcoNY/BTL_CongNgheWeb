<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Đăng nhập</title>
</head>
<style>
    body {
        background-color: gray;
        background-image: url(img/nen.webp);
        background-position: center;
        background-size: cover;

    }

    .login {
        border: 2px solid black;
        padding: 40px;
        border-radius: 10px;
        background-image: linear-gradient(rgba(255, 255, 255, .3), rgba(255, 255, 255, .3)), url('img/login0.jpg');
        color: black;

    }

    .mb-3 input {
        background-color: rgba(255, 99, 71, 0) !important;
        color: black !important;
        border-color: black !important;
    }

    .forgot {
        margin-left: 100px;

    }

    .register {
        color: slategrey;
        margin-top: 40px;
    }

    a {
        color: black;
    }


    h1 {
        margin-bottom: 50px;
    }

    .btn {
        padding: 5px 25px;
    }
</style>


<body>
    <?php
    include('connect.php');
    ?>
    <div class="container">
        <div class="row justify-content-center" style="margin-top:40px">
            <div class="col-md-5 login">
                <h1>Đăng nhập Admin</h1>
                <form action="processlogin.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name ="A_Email"class="form-control" aria-describedby="emailHelp" placeholder="Nhập Email">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name ="A_PASS" class="form-control " placeholder="Nhập mật khẩu">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                    </div>
                    <button type="submit"  name ="btnlogin" class="btn btn-primary">Đăng nhập</button>
                   


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