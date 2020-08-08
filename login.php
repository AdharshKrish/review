<?php

//chec
$email = $_POST['login'];
session_start();
if(isset($_SESSION['role'])){
    header('location:'.$_SESSION['role']);
    exit();

}

$_SESSION['email'] = $email;
$conn=mysqli_connect("localhost","root","root","review");
$result=mysqli_query($conn,"select * from roles where email='$email'");   
while($row=mysqli_fetch_assoc($result))
{
    if($row['role']=='guide'){
        $_SESSION['role'] = 'guide_approval.php';
        header('location:guide_approval.php');
    }
    else if($row['role']=='student'){
        $_SESSION['role'] = 'student_consent_form.php';
        header('location:student_consent_form.php');
    }
    else if($row['role']=='admin'){
        $_SESSION['role'] = 'admin_approval.php';
        header('location:admin_approval.php');
    }
    else{
        session_destroy();
        header('location:index1.html');

    }
}
