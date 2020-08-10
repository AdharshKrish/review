<?php

    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;

if($_POST['reject'])
{
    $conn=mysqli_connect("localhost","root","root","review");
  $result=mysqli_query($conn,"update timeanddate set admin_reject='".$date_clicked."', admin_msg='".$_POST['message']."' where regno='".$_POST['reg']."' and guide='".$_POST['staff']."'");
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['student']."','".$date_clicked."','".$_POST['message']."',0)");   
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['staff']."','".$date_clicked."','".$_POST['message']."',0)");   
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']); 
}
else{
    $conn=mysqli_connect("localhost","root","root","review");
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']);
    echo $result;
   $result=mysqli_query($conn,"update timeanddate set admin_approve='".$date_clicked."' where regno='".$_POST['reg']."' and guide='".$_POST['guide']."'");

    // $result=mysqli_query($conn,"update consent set guide_approval=1 where sno=".$_POST['sno']);
    $result=mysqli_query($conn,"insert into approved values('".$_POST['reg']."','".$_POST['name']."','".$_POST['email']."','".$_POST['course']."','".$_POST['guide']."')");
    echo $result;
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['email']."','".$date_clicked."','Admin Approval Successful',1)"); 
    echo $result;
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['guide']."','".$date_clicked."','Admin Approval Successful',1)");   
    echo $result;
     
    
}