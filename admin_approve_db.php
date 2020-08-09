<?php
if($_POST['reject'])
{
    $conn=mysqli_connect("localhost","root","","review");
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['student']."','".$_POST['staff']."','".$_POST['message']."',0)");   
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']); 
}
else{
    $conn=mysqli_connect("localhost","root","","review");
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']);
    // $result=mysqli_query($conn,"update consent set guide_approval=1 where sno=".$_POST['sno']);
    $result=mysqli_query($conn,"insert into approved values('".$_POST['reg']."','".$_POST['name']."','".$_POST['email']."','".$_POST['guide']."')");
    $result=mysqli_query($conn,"insert into notify values(null,'".$_POST['email']."','".$_POST['guide']."','null',1)");   

}