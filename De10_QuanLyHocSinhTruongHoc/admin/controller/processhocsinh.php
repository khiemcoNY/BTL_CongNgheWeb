<?php
// xử lý thêm
if(isset($_POST['btnHocSinh']))
{
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $GioiTinh=$_POST['GioiTinh'];
    $TenLop=$_POST['TenLop'];
    $NgaySinh=$_POST['NgaySinh'];
    $DiaChi=$_POST['DiaChi'];
    $SDT=$_POST['SDT'];
   
    include('../../configs/connect.php');
    
    $sql1 = "SELECT * FROM HOCSINH WHERE MAHS='$MaHS'";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
      header("Location:../../admin.php");
    } else {
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
        header("Location:../../admin.php");
    }

    
    mysqli_close($conn);
}
//xử lý update
if(isset($_POST['btnUpHS']))
{
    $Up_MaHS=$_POST['Up_MaHS'];
    $Up_TenHS=$_POST['Up_TenHS'];
    $Up_GioiTinh=$_POST['Up_GioiTinh'];
    $Up_TenLop=$_POST['Up_TenLop'];
    $Up_NgaySinh=$_POST['Up_NgaySinh'];
    $Up_DiaChi=$_POST['Up_DiaChi'];
    $Up_SDT=$_POST['Up_SDT'];
   
    include('../../configs/connect.php');
    
    $sql = "UPDATE HOCSINH SET 
    TenHS='$Up_TenHS',GioiTinh='$Up_GioiTinh',TenLop='$Up_TenLop',
    NgaySinh='$Up_NgaySinh',DiaChi='$Up_DiaChi',SDT='$Up_SDT' WHERE MaHS='$Up_MaHS';";


    if (mysqli_query($conn, $sql)) 
    {
        header("Location:../../admin.php");
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

if (isset($_GET['id'])) {
    include('../../configs/connect.php');
    $id=$_GET['id'];
    $sql = "DELETE FROM HOCSINH WHERE MaHS='$id';";

    $sql.="ALTER TABLE HOCSINH AUTO_INCREMENT = 1;";

  if (mysqli_multi_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location:../../admin.php");
    mysqli_close($conn);
}
?>
