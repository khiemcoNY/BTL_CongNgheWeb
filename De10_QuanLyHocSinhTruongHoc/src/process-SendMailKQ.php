<?php
include('connect.php');
$sql = "SELECT  * FROM KETQUA";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
        $Ma=$row['MaHS'];
        $sql1 = "SELECT  Email FROM PHUHUYNH where MaHS='$Ma";
        $result1 = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
        $row1 = mysqli_fetch_assoc($result) ;
        $MaHS= $row['MaHS'];
        $Email= $row1['Email'];
        echo $MaHS.$Email;  
    }
    }
} else {
  echo "0 results";
}
  
mysqli_close($conn);
?>