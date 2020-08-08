<?php
if(!$_POST['reject'])
{
    $conn=mysqli_connect("localhost","root","root","review");
    $result=mysqli_query($conn,"update consent set guide_approval=1 where sno=".$_POST['sno']);   
}
else{
    $conn=mysqli_connect("localhost","root","root","review");
    $result=mysqli_query($conn,"delete from consent where sno=".$_POST['sno']); 
}