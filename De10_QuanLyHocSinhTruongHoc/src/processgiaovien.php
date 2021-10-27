<?php
//xử lý thêm giáo viên
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
//Xử lý cập nhật giáo viên
if(isset($_POST['btnUpGV']))
{
    $Up_MaGV=$_POST['Up_MaGV'];
    $Up_TenGV=$_POST['Up_TenGV'];
    $Up_GioiTinh=$_POST['Up_GioiTinh'];
    $Up_Ngaysinh=$_POST['Up_NgaySinh'];
    $Up_DiaChi=$_POST['Up_DiaChi'];
    $Up_SDT=$_POST['Up_SDT'];

    include('connect.php');
    $sql = "UPDATE GIAOVIEN SET TenGV='$Up_TenGV',GioiTinh='$Up_GioiTinh',NgaySinh='$Up_Ngaysinh',DiaChi='$Up_DiaChi',SDT='$Up_SDT' WHERE MaGV='$Up_MaGV'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
      header("Location:admin.php");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>