<?php
    $conn=mysqli_connect("localhost","root","","review");
     $result=mysqli_query($conn,"delete from notify where sno=".$_POST['sno'] ); 
     header('location:student_consent_form.php');
    