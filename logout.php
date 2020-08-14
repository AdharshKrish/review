<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id"
        content="709166335785-seqiorm4c9rb17oemve81naa2t6eev7v.apps.googleusercontent.com">
</head>
<body>
    <?php
        session_start();
        session_destroy();
        header('location:index.html')
    ?>
    <!-- <script>
        // var auth2 = gapi.auth2.getAuthInstance();
        // auth2.signOut().then(function () {
        //     console.log('User signed out.');
        //     // document.getElementById("status").innerHTML = a + " signed out.";
        //     // document.getElementById("ID").innerHTML = "";
        //     // document.getElementById("name").innerHTML = "";
        //     // document.getElementById("email").innerHTML = "";
        // });
        window.location.href='index.html';
    </script> -->
</body>
</html>