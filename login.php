<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');

    button{
        width:40%;
        height:50px;
        font-size:25px;
        background:transparent;
        border:none;
        border-bottom:1px solid black ;
  font-family: 'EB Garamond', serif;
        position:relative;
        
        
    }
    button:hover{
        font-weight:700;
        background:#121545;
        color:white;
  font-family: 'EB Garamond', serif;

    }
    
    </style>
</head>
<body>
<?php
session_start();
if(isset($_POST['many'])){
    $_SESSION['role']=$_POST['many'].'.php';
    header('location:'.$_SESSION['role']);
    exit();

}

 $email = $_POST['login'];
if(isset($_SESSION['role'])){
    header('location:'.$_SESSION['role']);
    exit();

}

$_SESSION['email'] = $email;
$_SESSION['pic'] = $_POST['pic'];
$conn=mysqli_connect("localhost","pecedu_projReview","tvTWL6q6wk","pecedu_projReview");
$result=mysqli_query($conn,"select * from roles where email='$email'");   
$i=0;
$roles=[];
while($row=mysqli_fetch_assoc($result))
{
    $roles[$i]=$row['role'];
    // echo $roles[$i];
    $i++;
}
if($i>1){
    echo '<form method="post">';
  echo '<h1 style=" font-family: \'EB Garamond\', serif;">Login as</h1>';
    for($j=0;$j<$i;$j++){
        
        echo '<center><button type="submit" name="many" value="'.$roles[$j].'">'.$roles[$j].'</button></center>';
    }
    echo '</form>';
}
else if($i==1){
    $_SESSION['role']=$roles[0].'.php';
    header('location:'.$_SESSION['role']);

}
else{
    session_destroy();   
    header('location:index.html');


 }?>
</body>
</html>

