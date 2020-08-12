<?php

    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;

if(!$_POST['reject'])
{
    $conn=mysqli_connect("localhost","root","","review");
   $result=mysqli_query($conn,"update timeanddate set guide_approve='".$date_clicked."' where regno='".$_POST['regno']."' and guide='".$_POST['guide']."'");
    $result=mysqli_query($conn,"update consent set guide_approval=1 where sno=".$_POST['sno']);   
}
else{
    $conn=mysqli_connect("localhost","root","","review");
  $result=mysqli_query($conn,"update timeanddate set guide_reject='".$date_clicked."', guide_msg='".$_POST['message']."' where regno='".$_POST['regno']."' and guide='".$_POST['guide']."'");
//   $result=mysqli_query($conn,"select * from roles where email='".$_POST['email']."' ");
//   while($row=mysqli_fetch_assoc($result)){
//       $sname=$row['name'];
//   }
  $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['email']."','$date_clicked','".$_POST['message']."',0,'".$_POST['guide']."')");   
  $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']); 
}