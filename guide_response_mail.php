<?php  

$code=$_GET['code'];
$response=$_GET['response'];
date_default_timezone_set('Asia/Kolkata');
$date_clicked = date('Y-m-d H:i:s');;
$conn=mysqli_connect("localhost","pecedu_projReview","tvTWL6q6wk","pecedu_projReview");
$result=mysqli_query($conn,"select * from mail_response where code='$code'");
if($row=mysqli_fetch_assoc($result))
{
    $email=mysqli_query($conn,"select *  from roles where regno='".$row['student']."'");
    $email=mysqli_fetch_assoc($email);

    if($response==0)
    {
        $result=mysqli_query($conn,"update timeanddate set guide_reject='".$date_clicked."', guide_msg='', where regno='".$row['student']."' and guide='".$row['guide']."'");
        $result=mysqli_query($conn,"insert into notify values(null,'".$email['email']."','$date_clicked','',0,'".$row['guide']."')");   
        $result=mysqli_query($conn,"delete from consent where guide='".$row['guide']."' and regno='".$row['student']."'");   
    }
   else{
        $result=mysqli_query($conn,"update timeanddate set guide_approve='".$date_clicked."' where regno='".$row['student']."' and guide='".$row['guide']."'");
        $result=mysqli_query($conn,"update consent set guide_approval=1 where guide='".$row['guide']."' and regno='".$row['student']."'");   
    }
}
?>