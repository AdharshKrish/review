<?php
session_start();
if(!isset($_SESSION['email'])){
header("location:student.php");
    die();
}
 $conn=mysqli_connect("localhost","root","root","review");
// if(!isset($_GET['url']))
 $result=mysqli_query($conn,"insert into project_information values(null,'".$_GET['email']."','".$_GET['pname']."','".$_GET['url']."')");
// else
//$result=mysqli_query($conn,"update project_information set project_abstract_file='".$_GET['url']."' where email='".$_GET['email']."'" );
header("location:student.php");

// $mysqli = new mysqli("localhost","root","root","review");

// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }

//Perform a query, check for error
// if (!$mysqli -> query("delete from roles where sno=57")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("delete from consent where 1=1")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("delete from notify where 1=1")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("delete from timeanddate where 1=1")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("delete from approved where 1=1")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("update roles set name='Adharsh' where email='adharsh28600@gmail.com' and role='guide'")) {
//     echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("update roles set role='admin' where email='shafreena2000@pec.edu'")) {
//     echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("insert into project_details values(null,'".$_POST['email']."','".$_POST['pname']."','abc')")) {
//   echo("Error description: " . $mysqli -> error);
// }
// if (!$mysqli -> query("delete from mail_response where code='6CzQNE44tV'")) {
//   echo("Error description: " . $mysqli -> error);
// }
   