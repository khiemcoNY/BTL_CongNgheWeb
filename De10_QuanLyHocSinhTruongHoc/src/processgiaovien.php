<?php
if(isset($_POST['btngiaovien']))
{
    $MaGV=$_POST['MaGV'];
    $TenGV=$_POST['TenGV'];
    $GioiTinh=$_POST['GioiTinh'];
    $Ngaysinh=$_POST['NgaySinh'];
    $DiaChi=$_POST['DiaChi'];
    $SDT=$_POST['SDT'];
    
    
    include('connect.php');
    $sql = "INSERT INTO GIAOVIEN (MaGV,TenGV,GioiTinh,NgaySinh,DiaChi,SDT)
    VALUES ('$MaGV','$TenGV','$GioiTinh','$Ngaysinh','$DiaChi','$SDT')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
     header("Location:addgiaovien.php");
     mysqli_close($conn);
}


?>