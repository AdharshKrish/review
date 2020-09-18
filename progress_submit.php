<?php 
session_start();
$conn=mysqli_connect("localhost","root","root","review");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit_progress']))
{
    //Getting the Data from the form
    //echo 'submitted';
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;
	$result1=mysqli_query($conn,"select * from approved where email='".$_SESSION['email']."'");
                while($row=mysqli_fetch_assoc($result1))
                 {
                     $_SESSION['guide']=$row['guide'];
					 $_SESSION['name']=$row['name'];
                 }

$sql = "insert into project_progress values(null,'".$_SESSION['name']."','".$_SESSION['email']."','".$_POST['progress_activity_title']."','".$_POST['progress_description']."','".$date_clicked."','".$_SESSION['guide']."',0,null)";




    if ($conn->query($sql)  === TRUE) {
        echo '<script>alert("Your Details Have Been Submitted !")</script>';
}           else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                 }

$conn->close();
header("location:student.php");

}

?>






