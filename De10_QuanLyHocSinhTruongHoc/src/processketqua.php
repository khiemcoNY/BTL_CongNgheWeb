<?php 

if(isset($_POST['btnKetQua'])){
   
    $MaHS=$_POST['MaHS'];
    $TenHS=$_POST['TenHS'];
    $GioiTinh=$_POST['GioiTinh'];
    $TenLop=$_POST['TenLop'];
    $DiemVan=$_POST['DiemToan'];
    $DiemToan=$_POST['MaHS'];
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
