<?php  
 if(!empty($_FILES["employee_file"]["name"]))  
 {  
      include('connect.php');
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["employee_file"]["name"]));  
      if(in_array($extension, $allowed_ext))  
      {  
           $file_data = fopen($_FILES["employee_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
               $mahs = mysqli_real_escape_string($conn, $row[0]);  
                $tenhs = mysqli_real_escape_string($conn, $row[1]);  
                $gioitinh = mysqli_real_escape_string($conn, $row[2]);  
                $tenlop = mysqli_real_escape_string($conn, $row[3]);  
                $ngaysinh = mysqli_real_escape_string($conn, $row[4]);  
                $diachi = mysqli_real_escape_string($conn, $row[5]);  
                $sdt = mysqli_real_escape_string($conn, $row[6]);  
                $query = "  
                INSERT INTO HOCSINH  
                     (MaHS, TenHS, GioiTinh, TenLop, NgaySinh, DiaChi, SDT)  
                     VALUES ('$mahs', '$tenhs', '$gioitinh', '$tenlop', '$ngaysinh', '$diachi', '$sdt')  
                ";
                mysqli_query($conn, $query);  
           }  
           
           $select = "SELECT * FROM HOCSINH ";  
           $result = mysqli_query($conn, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  

                         <th width="">STT</th>
                            <th width="">MaHS</th> 
                           <th width="">TenHs</th>  
                           <th width="">GioiTinh</th>  
                           <th width="">TenLop</th>  
                           <th width="">Ngaysinh</th>  
                           <th width="">DiaChi</th> 
                           <th width="">sdt</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                     <td>'.$row["STT"].'</td>
                          <td>'.$row["MaHS"].'</td>  
                          <td>'.$row["TenHS"].'</td>  
                          <td>'.$row["GioiTinh"].'</td>  
                          <td>'.$row["TenLop"].'</td>  
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
