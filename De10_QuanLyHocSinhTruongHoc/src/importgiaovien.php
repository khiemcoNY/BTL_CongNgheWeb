<?php  
 if(!empty($_FILES["employee_file"]["name"]))  
 {      
      $connect = mysqli_connect("localhost", "root", "", "BTL_CNW");  
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["employee_file"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                 
                $MaGV = mysqli_real_escape_string($connect, $row[0]);  
                $TenGV = mysqli_real_escape_string($connect, $row[1]);  
                $GioiTinh = mysqli_real_escape_string($connect, $row[2]);  
                $NgaySinh = mysqli_real_escape_string($connect, $row[3]);  
                $DiaChi = mysqli_real_escape_string($connect, $row[4]);
                $SDT = mysqli_real_escape_string($connect, $row[5]);
                $query = "  
                INSERT INTO GIAOVIEN
                     (MaGV,TenGV,GioiTinh,NgaySinh,DiaChi,SDT)  
                     VALUES ('$MaGV','$TenGV','$GioiTinh','$NgaySinh','$DiaChi','$SDT')  
                ";  
                mysqli_query($connect, $query);  
           }  
           $select = "SELECT * FROM GIAOVIEN ORDER BY STT DESC";  
           $result = mysqli_query($connect, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                     <th width="">STT</th>
                     <th width="">MaGV</th>
                     <th width="">TenGV</th>
                     <th width="">GioiTinh</th>
                     <th width="">NgaySinh</th>
                     <th width="">DiaChi</th>
                     <th width="">SDT</th> 
                     
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["STT"].'</td>  
                          <td>'.$row["MaGV"].'</td>  
                          <td>'.$row["TenGV"].'</td>  
                          <td>'.$row["GioiTinh"].'</td>  
                          <td>'.$row["NgaySinh"].'</td>  
                          <td>'.$row["DiaChi"].'</td>  
                          <td>'.$row["SDT"].'</td>  
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
 ?>