<?php
if(isset($_POST['guide_accept']) || isset($_POST['guide_reject']))
{
    $conn=mysqli_connect("localhost","root","","review");
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;
}
if(!$_POST['reject'])
{
    $conn=mysqli_connect("localhost","root","","review");
  //  $result=mysqli_query($conn,"update timeanddate set guide_approve='".$date_clicked."' where regno=(select regno from consent where sno=".$_POST['sno'].") and guide=(select guide from consent where sno=".$_POST['sno']."));
    $result=mysqli_query($conn,"update consent set guide_approval=1 where sno=".$_POST['sno']);   
}
else{
    $conn=mysqli_connect("localhost","root","","review");
  //   $result=mysqli_query($conn,"update timeanddate set guide_reject='".$date_clicked."',guide_msg='".$_POST['message']."' where regno=(select regno from consent where sno=".$_POST['sno'].") and guide=(select guide from consent where sno=".$_POST['sno']."));
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['email']."',null,'".$_POST['message']."',0)");   
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']); 
}