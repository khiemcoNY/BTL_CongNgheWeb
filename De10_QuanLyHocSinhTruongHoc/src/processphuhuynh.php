<?php
// xử lý thêm
if(isset($_POST['btnPhuHuynh']))
{
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $TenLop=$_POST['TenLop'];
    $TenBo=$_POST['TenBo'];
    $TenMe=$_POST['TenMe'];
    $Emai=$_POST['Email'];
    $SDT=$_POST['SDT'];
    $DiaChi=$_POST['Diachi'];
    include('connect.php');
    
    $sql = " INSERT INTO PHUHUYNH 
    (MaHS, TenHS, TenLop, TenBo, TenMe, Email, SDT, DiaChi)  
    VALUES ('$MaHS', '$TenHS', '$TenLop', '$TenBo', '$TenMe',
     '$Email', '$SDT','$DiaChi');";
    if (mysqli_query($conn, $sql)) 
    {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:addphuhuynh.php");
    mysqli_close($conn);
}
//xử lý update
if(isset($_POST['btnUpPH']))
{
    $Up_MaHS=$_POST['Up_MaHS'];
    $Up_TenHS=$_POST['Up_TenHS'];
    $Up_TenLop=$_POST['Up_TenLop'];
    $Up_TenBo=$_POST['Up_TenBo'];
    $Up_TenMe=$_POST['Up_TenMe'];
    $Up_Email=$_POST['Up_Email'];
    $Up_SDT=$_POST['Up_SDT'];
    $Up_DiaChi=$_POST['Up_DiaChi'];
    include('connect.php');
    
    $sql = "UPDATE PHUHUYNH SET 
    TenHS='$Up_TenHS',TenLop='$Up_TenLop',TenBo='$Up_TenBo',
    TenMe='$Up_TenMe',Email='$Up_Email',SDT='$Up_SDT', DiaChi='$Up_DiaChi' WHERE MaHS='$Up_MaHS';";


    if (mysqli_query($conn, $sql)) 
    {
        // header("Location:addPhuHuynh.php");
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>