<?php
    include('configs/connect.php');
     $result = mysqli_query($conn, $sql);
    if($result>0){
    $i=1;
    while($row=mysqli_fetch_array($result)){                             
    echo "<tr>";
    echo"<td>".$i."</td>";
    echo"<td>".$row["MaHS"]."</td>";
    echo"<td>".$row["TenHS"]."</td>";
    echo"<td>".$row["GioiTinh"]."</td>";
    echo"<td>".$row["TenLop"]."</td>";
    echo"<td>".$row["DiemVan"]."</td>";
    echo"<td>".$row["DiemToan"]."</td>";
    echo"<td>".$row["DiemAnh"]."</td>";
    echo"<td>". $row["DiemLy"]."</td>";
    echo"<td>".$row["DiemHoa"]."</td>";
    echo"<td>".$row["DiemSinh"]."</td>";
    echo "</tr>";
    $i++;
    }
}
?>    