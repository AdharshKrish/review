<?php 
session_start();
$conn=mysqli_connect("localhost","root","1234","review");
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
                 }

$sql = "insert into project_progress values(null,'".$_SESSION['email']."','".$_POST['progress_activity_title']."','".$_POST['progress_description']."','".$date_clicked."','".$_SESSION['guide']."',0,null)";




    if ($conn->query($sql)  === TRUE) {
        
        //change window.location to the desired url

        echo '<script>alert("Your Details Have Been Submitted !"); window.location="http://localhost/review%20udp/review/student.php";</script>';
        //header("Location: http://localhost/review%20udp/review/student.php");
        //die();
}           else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                 }

$conn->close();

}

?>






