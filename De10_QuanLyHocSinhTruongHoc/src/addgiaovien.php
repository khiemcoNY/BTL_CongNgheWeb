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
    <title>Addgiaovien</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">


                <h2 align="center">Giáo Viên</h2>
                <form id="upload_csv" method="post" enctype="multipart/form-data">
                    <div class="col-md-3">

                        <label>Thêm dữ liệu</label>
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
                <form action="processgiaovien.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputMaGV" >Mã giáo viên</label>
                        <input type="text" name="MaGV" class="form-control" id="exampleInputMaGV" aria-describedby=""  placeholder="Nhập vào Mã giáo viên" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTenGV" >Tên giáo viên</label>
                        <input type="text" name="TenGV" class="form-control" id="exampleInputTenGV" aria-describedby=""  placeholder="Nhập vào tên giáo viên">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGioiTinh" >Giới tính</label>
                        <input type="text" name="GioiTinh" class="form-control" id="exampleInputGioiTinh" aria-describedby=""  placeholder="Nhập vào giới tính">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNgaySinh" >Ngày sinh</label>
                        <input type="text" name="NgaySinh" class="form-control" id="exampleInputNgaySinh" aria-describedby=""  placeholder="Nhập vào ngày sinh">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDiaChi" >Địa chỉ</label>
                        <input type="text" name="DiaChi" class="form-control" id="exampleInputDiaChi" aria-describedby=""  placeholder="nhập vào địa chỉ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSDT" >Số điện thoại</label>
                        <input type="text" name="SDT" class="form-control" id="exampleInputSDT" aria-describedby="" placeholder="Nhập vào số điện thoại" >
                    </div>
                    <button type="submit" name="btngiaovien" class="btn btn-primary">Thêm giáo viên</button>
                </form>
                <br /><br /><br />
                <div class="table-responsive" id="employee_table">
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
                        <?php  
                                include('connect.php');
                                $sql = "SELECT * FROM GIAOVIEN";
                                $result = mysqli_query($conn, $sql);

                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>
                        <tr>
                            <td><?php echo $row["STT"]; ?></td>
                            <td><?php echo $row["MaGV"]; ?></td>
                            <td><?php echo $row["TenGV"]; ?></td>
                            <td><?php echo $row["GioiTinh"]; ?></td>
                            <td><?php echo $row["NgaySinh"]; ?></td>
                            <td><?php echo $row["DiaChi"]; ?></td>
                            <td><?php echo $row["SDT"]; ?></td>
                        </tr>
                        <?php  
                          }  
                          ?>
                    </table>
                </div>




                <script>
                $(document).ready(function() {
                    $('#upload_csv').on("submit", function(e) {
                        e.preventDefault(); //form will not submitted  
                        $.ajax({
                            url: "importgiaovien.php",
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
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>