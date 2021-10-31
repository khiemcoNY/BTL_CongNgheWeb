<?php  
 if(!empty($_FILES["employee_file"]["name"]))  
 {  
      include('../../configs/connect.php');
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["employee_file"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
               $MaHS = mysqli_real_escape_string($conn, $row[0]);  
                $TenHS = mysqli_real_escape_string($conn, $row[1]);  
                $TenLop = mysqli_real_escape_string($conn, $row[2]);  
                $TenBo = mysqli_real_escape_string($conn, $row[3]);  
                $TenMe = mysqli_real_escape_string($conn, $row[4]);  
                $Email = mysqli_real_escape_string($conn, $row[5]);  
                $SDT = mysqli_real_escape_string($conn, $row[6]);  
                $DiaChi = mysqli_real_escape_string($conn, $row[7]);  
               

                $query = "  
                INSERT INTO PHUHUYNH 
                     (MaHS, TenHS, TenLop, TenBo, TenMe, Email, SDT, DiaChi)  
                     VALUES ('$MaHS', '$TenHS', '$TenLop', '$TenBo', '$TenMe', '$Email', '$SDT','$DiaChi')  
                ";
                mysqli_query($conn, $query);  
           }  
           
           $select = "SELECT * FROM PHUHUYNH ";  
           $result = mysqli_query($conn, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                           <th width="">STT</th>
                           <th width="">MaHS</th>
                           <th width="">TenHs</th>
                           <th width="">TenLop</th>
                           <th width="">TenBo</th>
                           <th width="">TenMe</th>
                           <th width="">Email</th>
                           <th width="">SDT</th>
                           <th width="">DiaChi</th>
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                     <td>'.$row["STT"].'</td>
                          <td>'.$row["MaHS"].'</td>  
                          <td>'.$row["TenHS"].'</td>  
                          <td>'.$row["TenLop"].'</td>  
                          <td>'.$row["TenBo"].'</td>  
                          <td>'.$row["TenMe"].'</td>  
                          <td>'.$row["Email"].'</td>  
                          <td>'.$row["SDT"].'</td>  
                          <td>'.$row["DiaChi"].'</td>  
                     </tr>  
                ';
           }  
           $output .= '</table>';  
           echo $output;  
      }  
      else  
      {  
           echo 'Error1';  
      }  
 }  
 else  
 {  
      echo "Error2";  
 }
