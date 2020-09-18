<?php
session_start();
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;

if(!$_POST['reject'])
{
$conn=mysqli_connect("localhost","root","root","review");
$result=mysqli_query($conn,"update project_progress set guide_approval=1 where sno=".$_POST['sno']);
}
else 
{
	$conn=mysqli_connect("localhost","root","root","review");
	$result=mysqli_query($conn,"update project_progress set reject_message='".$_POST['message']."', guide_approval=-1 where sno=".$_POST['sno']);
}

?>