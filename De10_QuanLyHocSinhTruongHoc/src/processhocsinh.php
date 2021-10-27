<?php
if(isset($_POST['btnHocSinh']))
{
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $GioiTinh=$_POST['GioiTinh'];
    $TenLop=$_POST['TenLop'];
    $NgaySinh=$_POST['NgaySinh'];
    $DiaChi=$_POST['DiaChi'];
    $SDT=$_POST['SDT'];
   
    include('connect.php');
    
    $sql = "INSERT INTO HOCSINH  
    (MaHS, TenHS, GioiTinh, TenLop, NgaySinh, DiaChi, SDT)  
    VALUES ('$MaHS', '$TenHS', '$GioiTinh', '$TenLop', '$NgaySinh',
     '$DiaChi', '$SDT');";

    if (mysqli_query($conn, $sql)) 
    {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:addhocsinh.php");
    mysqli_close($conn);
}
?>