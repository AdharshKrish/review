<?php
    $conn=mysqli_connect("localhost","root","","review");
     $result=mysqli_query($conn,"update notify set staff=null where sno=".$_POST['sno'] ); 
     header('location:student_consent_form.php');
    