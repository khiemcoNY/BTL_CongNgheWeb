<?php
    session_start();  
    if(isset($_POST['btnlogin'])){
        $Email= $_POST['A_Email'];
        $pass= $_POST['A_PASS'];
       
       
        include('../../configs/connect.php');
        $sql = "SELECT * FROM ADMIN WHERE A_Email='$Email'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            // Lấy mật khẩu ra
            $row=mysqli_fetch_assoc($result);
            $pass_hash = $row['A_PASS'];
            $name=$row['A_Name'];
        
            if(password_verify($pass,$pass_hash)){
               $_SESSION['login_ok'] = $Email;
                header("Location:../../admin.php?name=$name");
            }else{
                header("Location:../view/loginadmin.php");

            }
        }else{
            echo "Email không tồn tại";
        }
    }
    
    

?>