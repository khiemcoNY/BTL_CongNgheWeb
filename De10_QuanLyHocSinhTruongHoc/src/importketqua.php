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
                $MaHS = mysqli_real_escape_string($conn, $row[0]);  
                $TenHS = mysqli_real_escape_string($conn, $row[1]);  
                $GioiTinh = mysqli_real_escape_string($conn, $row[2]);  
                $TenLop = mysqli_real_escape_string($conn, $row[3]);  
                $DiemVan = mysqli_real_escape_string($conn, $row[4]);
                $DiemToan = mysqli_real_escape_string($conn, $row[4]);  
                $DiemAnh = mysqli_real_escape_string($conn, $row[4]);  
                $DiemLy = mysqli_real_escape_string($conn, $row[4]);  
                $DiemHoa = mysqli_real_escape_string($conn, $row[4]);  
                $DiemSinh = mysqli_real_escape_string($conn, $row[4]);  

                $query = "  
                INSERT INTO KETQUA  
                     (MaHS, TenHS, GioiTinh,TenLop, DiemVan,DiemToan,DiemAnh,DiemLy,DiemHoa,DiemSinh)  
                     VALUES ('$MaHS', '$TenHS', ' $GioiTinh', '$TenLop', '$DiemVan','$DiemToan', '$DiemAnh', '$DiemLy', '$DiemHoa', '$DiemSinh')  
                ";  
                mysqli_query($conn, $query);  
           }  
           $select = "SELECT * FROM KETQUA ";  
           $result = mysqli_query($conn, $select);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                     <th width="">STT</th>
                     <th width="">MaHS</th>
                     <th width="">TenHS</th>
                     <th width="">Gioi Tinh</th>
                     <th width="">Ten Lop</th>
                     <th width="">Diem Van</th>
                     <th width="">Diem Toan</th>
                     <th width="">Diem Anh</th>
                     <th width="">Diem Ly</th>
                     <th width="">Diem Hoa</th>
                     <th width="">Diem Sinh</th>
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
                          <td>'.$row["DiemVan"].'</td>  
                          <td>'.$row["DiemToan"].'</td>  
                          <td>'.$row["DiemAnh"].'</td>  
                          <td>'.$row["DiemLy"].'</td>  
                          <td>'.$row["DiemHoa"].'</td>  
                          <td>'.$row["DiemSinh"].'</td>  

                          
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