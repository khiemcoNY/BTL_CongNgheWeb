<?php
//xử lý thêm admin
if(isset($_POST['btnadmin']))
{
    $A_Name=$_POST['A_Name'];
    $A_Email=$_POST['A_Email'];
    $A_PASS=$_POST['A_PASS'];
    $pass_hash = password_hash($A_PASS,PASSWORD_DEFAULT);
    
    include('../../configs/connect.php');

    $sql1 = "SELECT * FROM ADMIN WHERE A_Email='$A_Email'";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
      header("Location:../../admin.php");
    } else {
      $sql = "INSERT INTO ADMIN (A_Name,A_Email,A_PASS)
      VALUES ('$A_Name','$A_Email','$pass_hash')";
      
        if (mysqli_query($conn, $sql )) {
          header("Location:../../admin.php");
        
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
     
     mysqli_close($conn);
}
//Xử lý cập nhật admin

if(isset($_POST['btnUpAD']))
{
    $Up_A_Name=$_POST['Up_A_Name'];
    $Up_A_Email=$_POST['Up_A_Email'];
    $Up_A_PASS=$_POST['Up_A_PASS'];
    $pass_hash = password_hash($Up_A_PASS,PASSWORD_DEFAULT);
    include('../../configs/connect.php');

    $sql = "UPDATE ADMIN SET A_Name='$Up_A_Name',A_Email='$Up_A_Email',A_PASS='$pass_hash'
    WHERE A_Email='$Up_A_Email';";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
      header("Location:../../admin.php");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  
    mysqli_close($conn);
}

// Xử lý xóa Admin
if (isset($_GET['id'])) {
  include('../../configs/connect.php');
  $DelA_Email=$_GET['id'];
  $sql = "DELETE FROM ADMIN WHERE A_Email='$DelA_Email';";
  $sql.="ALTER TABLE ADMIN AUTO_INCREMENT = 1;";

  if (mysqli_multi_query($conn, $sql)) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  header("Location:../../admin.php");


  mysqli_close($conn);
}
