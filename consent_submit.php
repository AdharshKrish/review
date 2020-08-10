<?php
 $conn=mysqli_connect("localhost","root","root","review");
 if(isset($_POST['datetime']))
{
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;
}
$regno=strtoupper($_POST['regno']);
 $result=mysqli_query($conn,"insert into consent values(null,'".$_POST['name']."','".$regno."','".$_POST['email']."','".$_POST['guide']."',0,'".$date_clicked."')");
 $result=mysqli_query($conn,"insert into timeanddate values('".$regno."','".$date_clicked."','".$_POST['guide']."',null,null,null,null,null,null)");
 header('location:login.php');
 $result=mysqli_query($conn,"update roles set name='".$_POST['name']."', regno='".$regno."' where email='".$_POST['email']."'");

