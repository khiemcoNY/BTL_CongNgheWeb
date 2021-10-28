<?php
echo "aaa";
        include('connect.php'); 
        $sql1= "SELECT * FROM LOP";
        $result1 = mysqli_query($conn, $sql1);
         if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while($row1 = mysqli_fetch_assoc($result1)) {
                echo ' <li><a class="dropdown-item" href="#">';
                echo $row1["TenLop"];
                echo '</a></li>'. "<br>";
            }
          } else {
            echo "0 results";
          }                 
                                 // output data of each row
                                 
                         
                                
                                
                             
 ?>