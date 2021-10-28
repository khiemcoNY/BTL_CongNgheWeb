<?php 
    include('connect.php');
    if(isset($_POST["search"])){
        $MaHS=$_POST["MaHS"];
        $sql="SELECT * FROM KET QUA WHERE MaHS='$MaHS'";
    }
    elseif(isset($_GET["TenLop"])){
        $TenLop=$_GET["TenLop"];
        $sql="SELECT * FROM KET QUA WHERE TenLop='$TenLop'";
    }
    else {$sql = "SELECT * FROM KETQUA";}
    
    
?>