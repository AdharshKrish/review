<?php
$conn=mysqli_connect("localhost","root","root","review");
// $result=mysqli_query($conn,"insert into roles value(null,null,null,'adharsh28600@gmail.com',null,'student')");
$result=mysqli_query($conn,"select * from roles");
while($row=mysqli_fetch_assoc($result))
{
    echo $row['sno'].' -- '.$row['email'].' -- '.$row['role'].' <br> ';
}