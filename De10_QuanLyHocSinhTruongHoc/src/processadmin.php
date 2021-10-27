<?php
//xử lý thêm admin
if(isset($_POST['btnadmin']))
{
    $A_Name=$_POST['A_Name'];
    $A_Email=$_POST['A_Email'];
    $A_PASS=$_POST['A_PASS'];
    
    
    include('connect.php');
    $sql = "INSERT INTO ADMIN (A_Name,A_Email,A_PASS)
    VALUES ('$A_Name','$A_Email','$A_PASS')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location:admin.php");
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
     
     mysqli_close($conn);
}
//Xử lý cập nhật admin
if(isset($_POST['btnUpAD']))
{
    $Up_A_Name=$_POST['Up_A_Name'];
    $Up_A_Email=$_POST['Up_A_Email'];
    $Up_A_PASS=$_POST['Up_A_PASS'];
    include('connect.php');

    $sql = "UPDATE ADMIN SET A_Name='$Up_A_Name',A_Email='$Up_A_Email',A_PASS='$Up_A_PASS'
    WHERE A_Email='$Up_A_Email';";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
      header("Location:admin.php");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  
    mysqli_close($conn);
}
?>