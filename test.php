<!DOCTYPE html>
<html lang="en">

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
<style> 
#t1 {
    width:100%;
}
</style>
</head>
<body> 
    <a style="color:red" onclick="t1()">this is me</a> 
    <a id="fz" style="color:blue" onclick="fun()">this is me</a> 
    
    <div id='t1' style="display:none">
         this is t1 
</div> 
<div id='t2' style="display:none">
    this is t2
</div>
<script>
        function t1(){
            document.getElementById('t1').style.display="block";
            document.getElementById('t2').style.display="none";
            
        }
        function t2(){
            document.getElementById('t2').style.display="block";
            document.getElementById('t1').style.display="none";
            
        }
        function fun()
    {
        $(document).ready(function(){
     
     // client id of the project
 
     var clientId = "709166335785-seqiorm4c9rb17oemve81naa2t6eev7v.apps.googleusercontent.com";
     
     // redirect_uri of the project
 
     var redirect_uri = "http://localhost/review/upload.php";
 
     // scope of the project
 
     
     var scope = "https://www.googleapis.com/auth/drive";
 
     // the url to which the user is redirected to
 
     var url = "";
 
 
     // this is event click listener for the button
 
     $("#fz").click(function(){
 
        // this is the method which will be invoked it takes four parameters
 
        signIn(clientId,redirect_uri,scope,url);
 
     });
 
     function signIn(clientId,redirect_uri,scope,url){
      
        // the actual url to which the user is redirected to 
 
        url = "https://accounts.google.com/o/oauth2/v2/auth?redirect_uri="+redirect_uri
        +"&prompt=consent&response_type=code&client_id="+clientId+"&scope="+scope
        +"&access_type=offline";
 
        // this line makes the user redirected to the url
 
        window.location = url;
 
 
 
 
     }
 
 
 
   });

    }
    
    </script>

    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

