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
    <title>addphuhuynh</title>
</head>

<style>
.style1 {
    border: 2px solid black;
    padding: 40px;
    margin-top: 70px;
    border-radius: 15px;
    background-color: #ccc;

}

.style1 h2 {
    color: white;
    text-shadow: 1px 1px 2px black, 0 0 40px rgb(34, 34, 36), 0 0 13px rgb(32, 32, 34);
}

.style2 {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12 style1">


                <h2 align="center">Thêm thông tin phụ huynh</h2>
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
                <form action="processphuhuynh.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputMaHS">MaHS </label>
                        <input type="text" name="MaHS" class="form-control" id="exampleInputMaHS" aria-describedby=""
                            placeholder="Enter Ma Hoc Sinh">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputTenHS">Tên Học sinh </label>
                        <input type="text" name="TenHS" class="form-control" id="exampleInputGioiTinh"
                            aria-describedby="" placeholder="Enter Ten Hoc Sinh">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputTenLop">Tên lớp </label>
                        <input type="Text" name="TenLop" class="form-control" id="exampleInputTenLop"
                            aria-describedby="" placeholder="Enter Ten Lop">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputNgaySinh">Tên Bố </label>
                        <input type="Text" name="TenBo" class="form-control" id="exampleInputTenBo" aria-describedby=""
                            placeholder="Enter Ten Bo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDiaChi">Tên mẹ</label>
                        <input type="Text" name="TenMe" class="form-control" id="exampleInputTenMe" aria-describedby=""
                            placeholder="Enter Ten Me">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="Text" name="Email" class="form-control" id="exampleInputEmail" aria-describedby=""
                            placeholder="Enter Dia chi Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">SDT</label>
                        <input type="text" name="SDT" class="form-control" id="exampleInputSDT" aria-describedby=""
                            placeholder="SDT">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSDT">Địa chỉ</label>
                        <input type="text" name="Diachi" class="form-control" id="exampleInputSDT" aria-describedby=""
                            placeholder="Dia chi">
                    </div>
                    <button type="submit" style="margin-top:10px;" name="btnPhuHuynh" class="btn btn-primary">Thêm Phụ Huynh</button>
                </form>
                <br /><br /><br />
                <div class="table-responsive" id="employee_table">
                    <table class="table table-bordered style2">
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
                        <?php
                            include('connect.php');
                            $sql = "SELECT * FROM PHUHUYNH";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                            <td><?php echo $row["STT"]; ?></td>
                            <td><?php echo $row["MaHS"]; ?></td>
                            <td><?php echo $row["TenHS"]; ?></td>
                            <td><?php echo $row["TenLop"]; ?></td>
                            <td><?php echo $row["TenBo"]; ?></td>
                            <td><?php echo $row["TenMe"]; ?></td>
                            <td><?php echo $row["Email"]; ?></td>
                            <td><?php echo $row["SDT"]; ?></td>
                            <td><?php echo $row["DiaChi"]; ?></td>


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
                url: "importphuhuynh.php",
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