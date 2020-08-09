<?php
 $conn=mysqli_connect("localhost","root","","review");
 if(isset($_POST['datetime']))
{
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;
}
 $result=mysqli_query($conn,"insert into consent values(null,'".$_POST['name']."','".$_POST['regno']."','".$_POST['email']."','".$_POST['guide']."',0,'".$date_clicked."')");
 //$result=mysqli_query($conn,"insert into timeanddate values('".$_POST['regno']."','".$date_clicked."','".$_POST['guide']."',null,null,null,null,null,null)");
 header('location:login.php');
