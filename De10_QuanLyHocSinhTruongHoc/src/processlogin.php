<?php
    session_start();
    $Email      = $_POST['A_Email'];
    $pass      = $_POST['A_PASS'];
   
   
    include('connect.php');
    $sql = "SELECT * FROM ADMIN WHERE A_Email='$Email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['A_PASS'];
    
        echo $pass_hash;
        echo var_dump($pass_hash);
        if(password_verify('1','$pass_hash')){
            $_SESSION['login_ok'] = $Email;
            header("Location:admin.php");
        }else{
            echo "Kiểm tra lại Mật khẩu";
        }
    }else{
        echo "Email không tồn tại";
    }

?>