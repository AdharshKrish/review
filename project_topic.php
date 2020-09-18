<?php

?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
    <title>Review System</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>

<body>
    
    <!-- FORM STARTS HERE  -->
    
    <div >
        <form method="post" enctype="multipart/form-data" class="consent-form">
<h2 align="center" style="color:#121545">PROJECT DETAILS</h2>
        <div class="form__group field">
          <input type="text" class="form__field mt-4 mb-4" placeholder="Project-Topic" name="project-topic"  required />
          <label class="form__label">PROJECT TOPIC </label>

          <div class="">
        <select class="form__field"  name="studentname">
            <option value="Select" selected="true" style="color:#9b9b9b" disabled> Your Name </option>
            <?php
                $conn=mysqli_connect("localhost","root","root","review");
                $result=mysqli_query($conn,"select name from approved");
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <option style="color:#000" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
                    <?php
                    $stud_name =$_POST['studentname'];
                }

                    ?>

        </div>
                  

         <div ><h3 >Upload Your Project abstract</h3>
          <input style ="display:none;" type="file" name ="project-abstract"  >
          <br><br>
          </div>
        

          

          <div class="">
        <select class="form__field"  name="guide">
            <option value="Select" selected="true" style="color:#9b9b9b" disabled>Select your guide</option>
            <?php
                
                $result2=mysqli_query($conn,"select distinct guide from approved ");
                while($row=mysqli_fetch_assoc($result2))
                {
                    ?>
                    <option style="color:#000" value="<?php echo $row['guide'];?>"><?php echo $row['guide'];?></option>
                    <?php
                    $guide_name=$_POST['guide'];
                }
            ?>
        </select>
        </div>
        <div class="mt-3">
        <h4>Paste Your Google Drive Link For Project Abstract Here </h4>
        <input type="text" name="g-driveLink">
        </div>


        
        


        <div class="text-center mt-2">
          <input type="submit" name ="submit"class = "btn btn-danger">
          <a href="student.php" class="btn">BACK</a>
          </div>

          
          



        
        </div>
    </div>
</body>
</html>

<?php
session_start();



//======================================
//  DATABASE CONNECTION
//======================================


// Create connection
$conn=mysqli_connect("localhost","root","root","review");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(@$_POST['submit'])
{
    //Getting the Data from the form
    $project_topic =$_POST["project-topic"];
    $g_drive_link =$_POST["g-driveLink"];
    

$sql = "INSERT INTO project_information (project_title , student_name , project_guide,email, project_abstract_file)
VALUES ( '$project_topic' , '$stud_name ' , '$guide_name ','{$_SESSION['email']}','$g_drive_link')";



    if ($conn->query($sql)  === TRUE) {
        //SESSION VARIABLE TO CHECK IF THE STUDENT HAD SUBMITTED THE FORM IN STUDENTS.PHP
        $_SESSION["submitted"] = "yes";
        echo '<script>alert("Your Details Have Been Submitted !")</script>';
}           else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                 }

$conn->close();
}

?>