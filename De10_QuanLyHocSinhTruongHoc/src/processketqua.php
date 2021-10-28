<?php 

if(isset($_POST['btnKetQua'])){
   
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $GioiTinh=$_POST['GioiTinh'];
    $TenLop=$_POST['TenLop'];
    $DiemVan=$_POST['DiemVan'];
    $DiemToan=$_POST['DiemToan'];
    $DiemAnh=$_POST['DiemAnh'];
    $DiemLy=$_POST['DiemLy'];
    $DiemHoa=$_POST['DiemHoa'];
    $DiemSinh=$_POST['DiemSinh'];
    echo $DiemAnh;
    include('connect.php');
    $sql= "  
    INSERT INTO KETQUA  
         (MaHS, TenHS, GioiTinh,TenLop, DiemVan,DiemToan,DiemAnh,DiemLy,DiemHoa,DiemSinh)  
         VALUES ('$MaHS', '$TenHS', ' $GioiTinh', '$TenLop', '$DiemVan','$DiemToan', '$DiemAnh', '$DiemLy', '$DiemHoa', '$DiemSinh')  
    ";  
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location:addketqua.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if(isset($_POST['btnUpKQ']))
{
    $Up_MaHS=$_POST['Up_MaHS'];
    $Up_TenHS=$_POST['Up_TenHS'];
    $Up_GioiTinh=$_POST['Up_GioiTinh'];
    $Up_TenLop=$_POST['Up_TenLop'];
    $Up_DiemVan=$_POST['Up_DiemVan'];
    $Up_DiemToan=$_POST['Up_DiemToan'];
    $Up_DiemAnh=$_POST['Up_DiemAnh'];
    $Up_DiemLy=$_POST['Up_DiemLy'];
    $Up_DiemHoa=$_POST['Up_DiemHoa'];
    $Up_DiemSinh=$_POST['Up_DiemSinh'];

    include('connect.php');
    $sql = "UPDATE KETQUA SET TenHS='$Up_TenHS',GioiTinh='$Up_GioiTinh',TenLop='$Up_TenLop',DiemVan='$Up_DiemVan',DiemToan='$Up_DiemToan', DiemAnh='$Up_DiemAnh', DiemLy='$Up_DiemLy', DiemHoa='$Up_DiemHoa', DiemSinh='$Up_DiemSinh' WHERE MaHS='$Up_MaHS'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
if (isset($_GET['id'])) {
  include('connect.php');
  $id=$_GET['id'];
  $sql = "DELETE FROM KETQUA WHERE MaHS='$id'";

  if (mysqli_query($conn, $sql)) {
      echo "Record deleted successfully";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  header("Location:admin.php");


  mysqli_close($conn);
}
?>

