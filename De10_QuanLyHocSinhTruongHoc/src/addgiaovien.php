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
    <title>Hello, world!</title>
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