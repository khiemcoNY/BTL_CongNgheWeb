<?php
// xử lý thêm
if(isset($_POST['btnPhuHuynh']))
{
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $TenLop=$_POST['TenLop'];
    $TenBo=$_POST['TenBo'];
    $TenMe=$_POST['TenMe'];
    $Email=$_POST['Email'];
    $SDT=$_POST['SDT'];
    $DiaChi=$_POST['Diachi'];
    include('../../configs/connect.php');
    $sql1 = "SELECT * FROM PHUHUYNH WHERE MAHS='$MaHS'";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
      header("Location:../../admin.php");
    } else {
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
        header("Location:../../admin.php");
    }

   
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
    include('../../configs/connect.php');
    
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
    header("Location:../../admin.php");
    mysqli_close($conn);
}

if (isset($_GET['id'])) {
    include('../../configs/connect.php');
    $id=$_GET['id'];
    $sql = "DELETE FROM PHUHUYNH WHERE MaHS='$id';";

    $sql.="ALTER TABLE PHUHUYNH AUTO_INCREMENT = 1;";

  if (mysqli_multi_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location:../../admin.php");


    mysqli_close($conn);
}

?>