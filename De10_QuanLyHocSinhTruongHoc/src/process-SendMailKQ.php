<?php
include('connect.php');
$sql = "SELECT  * FROM KETQUA";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
        $Ma=$row['MaHS'];
        $sql1 = "SELECT  * FROM PHUHUYNH where MaHS='$Ma'";
        $result1 = mysqli_query($conn, $sql1);
          if (mysqli_num_rows($result1) > 0) {
              // output data of each row
            $row1 = mysqli_fetch_assoc($result1) ;
            
            $Email= $row1['Email'];
            $NoiDung="Mã Học Sinh: ".$row['MaHS']."  -  ".
                     "Tên Học Sinh: ".$row['TenHS']."  -  ".
                     "Lớp: ".$row['TenLop']."  -  ".
                     "Điểm Toán: ".$row['DiemToan']."  -  ".
                     "Điểm Văn: ".$row['DiemVan']."  -  ".
                     "Điểm Anh: ".$row['DiemAnh']."  -  ".
                     "Điểm Lý: ".$row['DiemLy']."  -  ".
                     "Điểm Hoa: ".$row['DiemHoa']."  -  ".
                     "Điểm Sinh: ".$row['DiemSinh'];
                     echo $NoiDung;
                     include('send-mailKQ.php');
                     sendKQ($Email,$NoiDung);
      }
    }
} else {
  echo "0 results";
}
  
mysqli_close($conn);
?>