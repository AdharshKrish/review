<?php

//chec
$email = $_POST['login'];
session_start();
$_SESSION['email'] = $email;
$conn=mysqli_connect("localhost","root","root","review");
$result=mysqli_query($conn,"select * from roles where email='$email'");   
while($row=mysqli_fetch_assoc($result))
{
    if($row['role']=='guide'){
        header('location:guide_approval.php');
    }
    else if($row['role']=='student'){
        header('location:student_consent_form.php');
    }
    else if($row['role']=='admin'){
        header('location:admin_approval.php');
    }
    else{
        session_destroy();
    }
}
