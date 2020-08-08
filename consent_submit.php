<?php
 $conn=mysqli_connect("localhost","root","root","review");
 $result=mysqli_query($conn,"insert into consent values(null,'".$_POST['name']."','".$_POST['regno']."','".$_POST['email']."','".$_POST['guide']."',0)");
 header('location:login.php');
//  $mysqli = new mysqli("localhost","root","root","review");

// // Check connection
// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }

// // Perform query
// if ($result = $mysqli -> query()) {
// //   echo "Returned rows are: " . $result -> num_rows;
//   // Free result set
//   $result -> free_result();
// }

// $mysqli -> close();

// $conn = new mysqli("localhost","root","root","review");
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "insert into consent values(null,'".$_POST['name']."','".$_POST['regno']."','".$_POST['email']."','".$_POST['guide']."')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();