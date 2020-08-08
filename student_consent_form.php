<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consent form</title>
</head>
<body style="display:grid; place-items: center;height:75vh">
    <div class="header">
        <img src="img/logo.png"></img><h1>DEPARTMENT OF <br> COMPUTER SCIENCE AND ENGINEERING</h1>
    </div>
<form action="consent_submit.php" method="post" class="consent-form">
<h1 align="center" style="color:#808">STUDENT CONSENT FORM</h1>
        <div class="form__group field">
          <input type="text" class="form__field" placeholder="Student Name" name="name"  required />
          <label class="form__label">Student Name</label>
        
        </div>
        <div class="form__group field">
          <input type="text" class="form__field" placeholder="Register Number" name="regno"  required />
          <label  class="form__label">Register Number</label>
      
        </div>
        <div class="form__group field">
          <input type="text" class="form__field" placeholder="Email ID" name="email"  required />
          <label  class="form__label">Email ID</label>
        </div>
 
        <div class="form__group field">
        <select class="form__field" style="width: 99.3%;" name="guide">
            <option value="Select">Select your guide</option>
            <?php
                $conn=mysqli_connect("localhost","root","root","review");
                $result=mysqli_query($conn,"select * from facultylogin");
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <option value="<?php echo $row['email'];?>"><?php echo $row['name'];?></option>
                    <?php
                }
            ?>
        </select>
        </div>
        <div class="form__group field">
        <button id="signup" class="submit">Submit</button>
            </div>
    </form>
</body>
</html>