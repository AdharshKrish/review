<?php

//chec
$email = $_POST['login'];
session_start();
if(isset($_SESSION['role'])){
    header('location:'.$_SESSION['role']);
    exit();

}

$_SESSION['email'] = $email;
$_SESSION['pic'] = $_POST['pic'];
$conn=mysqli_connect("localhost","root","root","review");
$result=mysqli_query($conn,"select * from roles where email='$email'");   
while($row=mysqli_fetch_assoc($result))
{
    if($row['role']=='guide'){
        $_SESSION['role'] = 'guide.php';
        header('location:guide.php');
    }
    else if($row['role']=='student'){
        $_SESSION['role'] = 'student.php';
        header('location:student.php');
    }
    else if($row['role']=='admin'){
        $_SESSION['role'] = 'admin.php';
        header('location:admin.php');
    }
    else{
        session_destroy();
        header('location:index1.html');

    }
}
