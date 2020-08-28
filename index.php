<?php
session_start();
if(isset($_SESSION['email'])){
    // $_SESSION['role']=$_POST['many'].'.php';
    header('location:login.php');
    exit();
}

//  $email = $_POST['login'];
// if(isset($_SESSION['role'])){
//     header('location:'.$_SESSION['role']);
//     exit();

// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id"
        content="709166335785-seqiorm4c9rb17oemve81naa2t6eev7v.apps.googleusercontent.com">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
    <style>
        .header {
  width: 100%;
  /* height:40px; */
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #1976D2; 

}

.header img {
  height: 80px;
}

.header h1 {
  color: white;
  padding-left: 30px;
  font-family: 'EB Garamond', serif;

}
.notify{
  width:100%;
  text-align: left;
}
canvas {
  display: block;
  width: 100vw;
  height: 100vh;
}
    </style>

</head>
<script></script>
<body>
    <div class="header">
        <img src="img/logo.png"></img><h1>DEPARTMENT OF <br> COMPUTER SCIENCE AND ENGINEERING</h1>
    </div>
   <center> <div class="g-signin2" data-onsuccess="onSignIn" style="margin:100px 0 30px 0"></div>
   <div >(Sign in using your college email-id)</div></center>
    <div id="ID"></div>
    <div id="name"></div>
    <div id="email"></div>
    <!-- <a href="#" onclick="signOut();">Sign out</a> -->
    <div id="status"></div>
    <form action="login.php" method="post" style="display: none;">
        <input type="text" name="pic" id="pic">
        <input type="submit" id="login" name="login" value="login">
    </form>
</body>
<script>
    var a;

    function onSignIn(googleUser) {
        var id_token = googleUser.getAuthResponse().id_token;
        googleUser.disconnect();
        console.log(id_token)
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/review/gsignin.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            console.log('Signed in as: ' + xhr.responseText);
            // if (confirm('Are you sure you want to signin as '+googleUser.getBasicProfile().getEmail()+'?')) {
                window.location.reload();
            // }
        };
        xhr.send('idtoken=' + id_token);
      
    }

    // function onSignIn(googleUser) {
    //     var profile = googleUser.getBasicProfile();
    //     document.getElementById("ID").innerHTML = "ID: " + profile.getId();
    //     console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead
    //     document.getElementById("name").innerHTML = "Name: " + profile.getName();
    //     a = profile.getName();
    //     document.getElementById("email").innerHTML = "Email: " + profile.getEmail();
    //     document.getElementById("status").innerHTML = "";
    //     console.log('Name: ' + profile.getName());
    //     console.log('Image URL: ' + profile.getImageUrl());
    //     console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    //     document.getElementById("login").value = profile.getEmail();
    //     document.getElementById("pic").value = profile.getImageUrl();
    //     document.getElementById("login").click();
    // }


    // function signOut() {
    //     // var auth2 = gapi.auth2.getAuthInstance();
    //     // auth2.signOut().then(function () {
    //     //     console.log('User signed out.');
    //     //     document.getElementById("status").innerHTML = a + " signed out.";
    //     //     document.getElementById("ID").innerHTML = "";
    //     //     document.getElementById("name").innerHTML = "";
    //     //     document.getElementById("email").innerHTML = "";
    //     window.onbeforeunload = function(e){
    //     gapi.auth2.getAuthInstance().signOut();
    //     };


    //     // });
    // }
</script>

</html>