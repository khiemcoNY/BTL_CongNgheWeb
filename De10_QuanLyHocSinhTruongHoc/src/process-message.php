<?php
 if(isset($_POST['btnMess'])){
     $txtMess=$_POST['txtMess'];
     $txtEmail=$_POST['txtEmail'];
     include('send-message.php');
     sendMess($txtEmail,$txtMess);
 }
?>