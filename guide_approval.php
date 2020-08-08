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
            $_SESSION['email']="lpandian72@pec.edu";
            $conn=mysqli_connect("localhost","root","root","review");
            $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['email']."' and guide_approval=0");
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['regno']?></td>
                <td><?php echo $row['email']?></td>
                <td><button  style=color:green onclick="approve('<?php echo $row['sno']?>')">Approve</button></td>
                <td><button  style=color:red onclick="reject('<?php echo $row['sno']?>')">Reject</button></td>
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
            $_SESSION['email']="lpandian72@pec.edu";
            $conn=mysqli_connect("localhost","root","root","review");
            $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['email']."' and guide_approval=1");
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
        function reject(sno){
            if (confirm('Are you sure you want to reject?')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "guide_approve_db.php",
                    data: {
                        reject:true,
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
    </script>
</body>
</html>