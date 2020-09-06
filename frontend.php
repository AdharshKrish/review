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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	

</head>

<body>
    
    <!-- FORM STARTS HERE  -->
    
    <div >
        <form method="post" enctype="multipart/form-data" class="consent-form">
<h2 align="center" style="color:#121545">PROJECT DETAILS</h2>
        <div class="form__group field">
          <input type="text" class="form__field mt-4 mb-4" placeholder="Project-Topic" name="project-topic"  required />
          <label class="form__label">PROJECT TOPIC </label>
          

          
          <h3 >Upload Your Project abstract</h3>
          
     <button id="login" onclick="fun()">
           Upload Files to Drive
       </button>
<script>
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
 
     $("#login").click(function(){
 
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
          <div class="text-center">
          <input type="submit" name ="submit"class = "btn btn-danger">
          </div>
    



        
        </div>
    </div>
	</form>
</body>
</html>