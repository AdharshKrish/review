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
        header('location:index.php')
    ?>
    <!-- <script>
        window.onbeforeunload = function(e){
            gapi.auth2.getAuthInstance().signOut();
        };
        window.location.href='index.php';
    </script> -->
</body>
</html>