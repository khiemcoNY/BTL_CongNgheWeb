<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>addhocsinh</title>
</head>
<style>
.style1 {
    border: 2px solid black;
    padding: 50px;
    margin-top: 50px;
    border-radius: 15px;
    background-color: #ccc;
}
.style1 from label{
    margin-bottom: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php
      session_start();
        if(!isset($_SESSION['login_ok'])){
             header("Location:../../site/view/loginadmin.php");
        }
        
?>
    <div class="container">

        <div class="row">
            <div class="col-md-12 style1">


                <h2 align="center">Thêm học sinh</h2>
                <br>
                <form id="upload_csv" method="post" enctype="multipart/form-data">
                    <div class="col-md-3">
                        <br />
                        <label>Add More Data</label>
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="employee_file" style="margin-top:15px;" />
                    </div>
                    <div class="col-md-5">
                        <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;"
                            class="btn btn-info" />
                    </div>
                    <div style="clear:both"></div>
                </form>
                <br /><br /><br />
                <form action="../controller/processhocsinh.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputMaHS">MaHS </label>
                        <input type="text" name ="MaHS" class="form-control" id="exampleInputMaHS" aria-describedby=""
                            placeholder="Enter MaHS">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenHS">TenHS </label>
                        <input type="text" name ="TenHS" class="form-control" id="exampleInputTenHS" aria-describedby=""
                            placeholder="Enter TenHS">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputGioiTinh">GioiTinh </label>
                        <input type="text" name ="GioiTinh" class="form-control" id="exampleInputGioiTinh" aria-describedby=""
                            placeholder="Enter GioiTinh">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenLop">TenLop </label>
                        <input type="Text" name ="TenLop" class="form-control" id="exampleInputTenLop" aria-describedby=""
                            placeholder="Enter TenLop">
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNgaySinh">NgaySinh </label>
                        <input type="Text" name ="NgaySinh" class="form-control" id="exampleInputNgaySinh" aria-describedby=""
                        placeholder="Enter NgaySinh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiaChi">DiaChi</label>
                        <input type="Text" name ="DiaChi" class="form-control" id="exampleInputDiaChi" aria-describedby=""
                            placeholder="Enter DiaChi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">SDT</label>
                        <input type="text" name ="SDT" class="form-control" id="exampleInputSDT" aria-describedby=""
                            placeholder="Enter SDT">
                    </div>
                    <button type="submit" name ="btnHocSinh"class="btn btn-primary">Submit</button>
                </form>
                <br /><br /><br />
                <div class="table-responsive" id="employee_table">
                    <table class="table table-bordered">
                        <tr>
                            <th width="">STT</th>
                            <th width="">MaHS</th>
                            <th width="">TenHs</th>
                            <th width="">GioiTinh</th>
                            <th width="">TenLop</th>
                            <th width="">Ngaysinh</th>
                            <th width="">DiaChi</th>
                            <th width="">SDT</th>
                        </tr>
                        <?php
                            include('../../configs/connect.php');
                            $sql = "SELECT * FROM HOCSINH";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                            <td><?php echo $row["STT"]; ?></td>
                            <td><?php echo $row["MaHS"]; ?></td>
                            <td><?php echo $row["TenHS"]; ?></td>
                            <td><?php echo $row["GioiTinh"]; ?></td>
                            <td><?php echo $row["TenLop"]; ?></td>
                            <td><?php echo $row["NgaySinh"]; ?></td>
                            <td><?php echo $row["DiaChi"]; ?></td>
                            <td><?php echo $row["SDT"]; ?></td>

                        </tr>
                        <?php
                            }
                            ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#upload_csv').on("submit", function(e) {
            e.preventDefault(); //form will not submitted  
            $.ajax({
                url: "../controller/importhocsinh.php",
                method: "POST",
                data: new FormData(this),
                contentType: false, // The content type used when sending data to the server.  
                cache: false, // To unable request pages to be cached  
                processData: false, // To send DOMDocument or non processed data file it is set to false  
                success: function(data) {
                    if (data == 'Error1') {
                        alert("Invalid File");
                    } else if (data == "Error2") {
                        alert("Please Select File");
                    } else {
                        $('#employee_table').html(data);
                    }
                }
            })
        });
    });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
