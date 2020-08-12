<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Approval</title>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<h4 align="right"><a href="logout.php" >SignOut</a></h4>

    
<h1>Yet to Approve</h1>

    <table>
        <th>
            <tr>
            <td>Student name</td>
            <td>Reg no.</td>
            <td>Email</td>
            <td>Guide</td>
            </tr>
            
        </th>
        <?php
        session_start();
        if(!isset($_SESSION['email'] ) ){
            header('location:index1.html');
        }
        if($_SESSION['role']!='admin_approval.php' ){
            header('location:'.$_SESSION['role']);
        }
            $conn=mysqli_connect("localhost","root","","review");
            $result=mysqli_query($conn,"select * from consent where guide_approval=1");
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['regno']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['guide']?></td>
                <td><button style=color:green onclick='<?php echo 'approve("'.$row['sno'].'","'.$row['regno'].'","'.$row['name'].'","'.$row['email'].'","'.$row['guide'].'")'?>'>Approve</button></td>
                <td><button style=color:red onclick="reject('<?php echo $row['sno']?>','<?php echo $row['email']?>','<?php echo $row['guide']?>')">Reject</button></td>
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
            <td>Guide</td>
            </tr>
            
        </th>
        <?php
        
            $conn=mysqli_connect("localhost","root","","review");
            $result=mysqli_query($conn,"select * from approved");
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['regno']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['guide']?></td>
                </tr>
                <?php
            }
            ?>
    </table>
    <script>
        function approve(sno,reg,name,email,guide){
            if (confirm('Are you sure you want to approve?')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "admin_approve_db.php",
                    data: {
                        sno:sno,
                        reg:reg,
                        name:name,
                        email:email,
                        guide:guide
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
        function reject(sno,student,staff){
            let message;
            if (message=prompt('Please mention the reason for rejecting')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "admin_approve_db.php",
                    data: {
                        reject:true,
                        sno:sno,
                        student:student,
                        staff:staff,
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