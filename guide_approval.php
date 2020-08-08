<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide Approval</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="logout.php">SignOut</a>

<h1>Notifications</h1>

    <?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index1.html');
    }
     $conn=mysqli_connect("localhost","root","root","review");
     $_SESSION['email']="lpandian72@pec.edu";
     $result=mysqli_query($conn,"select * from facultylogin where email='".$_SESSION['email']."'");
     while($row=mysqli_fetch_assoc($result))
     {
         $_SESSION['name']=$row['name'];
     }
     $result=mysqli_query($conn,"select * from notify where staff='".$_SESSION['name']."'");
     while($row=mysqli_fetch_assoc($result))
     {
         if($row['category']==0){
             echo "<div style=color:red>";
             echo "Admin has rejected ".$row['student']." consent. ";
             echo "Reason: ".$row['message'];
             echo "</div>";
         }
         else if($row['category']==1){
             echo "<div style=color:green>";
             echo "Admin has approved ".$row['student']." consent. ";
             echo "</div>";
         }
     }
    ?>
<h1>Yet to Approve</h1>

    <table>
        <th>
            <tr>
            <td>Student name</td>
            <td>Reg no.</td>
            <td>Email</td>
            </tr>
            
        </th>
        <?php
       
        
            // $_SESSION['email']="lpandian72@pec.edu";
            // $conn=mysqli_connect("localhost","root","root","review");
            $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['name']."' and guide_approval=0");
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['regno']?></td>
                <td><?php echo $row['email']?></td>
                <td><button  style=color:green onclick="approve('<?php echo $row['sno']?>')">Approve</button></td>
                <td><button  style=color:red onclick="reject('<?php echo $row['sno']?>','<?php echo $row['email']?>')">Reject</button></td>
                </tr>
                <?php
            }
            ?>
    </table>
<h1>Approved</h1>
    <table>
        <th>
            <tr>
            <td>Student name</td>
            <td>Reg no.</td>
            <td>Email</td>
            </tr>
            
        </th>
        <?php
            // $conn=mysqli_connect("localhost","root","root","review");
            $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['name']."' and guide_approval=1");
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['regno']?></td>
                <td><?php echo $row['email']?></td>
                </tr>
                <?php
            }
            ?>
    </table>
    <script>
        function approve(sno){
            if (confirm('Are you sure you want to approve?')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "guide_approve_db.php",
                    data: {
                        sno:sno
                    },
                    success: function (blabla) {
                        console.log(blabla)
                        window.location.reload()
                    }
                });
                
            } else {
            // Do nothing!
            }
        }
        function reject(sno,email){
            let message;
            if (message=prompt('Please mention the reason for rejecting')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "guide_approve_db.php",
                    data: {
                        reject:true,
                        sno:sno,
                        email:email,
                        message:message
                    },
                    success: function (blabla) {
                        console.log(blabla)
                        window.location.reload()
                    }
                });
                
            } else {
            // Do nothing!
            }
        }
    </script>
</body>
</html>