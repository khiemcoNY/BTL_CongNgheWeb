<?php
include('connect.php');
$sql = "SELECT  k.MaHS, k.TenHS, k.TenLop, k.DiemToan, k.DiemVan, k.DiemAnh, k.DiemLy, k.DiemHoa, k.DiemSinh,p.Email FROM KETQUA k, PHUHUYNH p WHERE KETQUA.MaHS=PHUHUYNH.MaHS";
$result = mysqli_query; 

?>