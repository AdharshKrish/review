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

<link rel="stylesheet" type="text/css" media="screen" href="upload.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="upload.js"></script>
	<style>
	
	#progress-wrp {
    border: 1px solid #0099CC;
    padding: 1px;
    position: relative;
    height: 30px;
	width:300px;
    border-radius: 3px;
    margin: 20px;
    text-align: left;
    background: #fff;
    box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
  }
  
  #progress-wrp .progress-bar {
    height: 100%;
    border-radius: 3px;
    background-color: #f39ac7;
    width: 0;
    box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
  }
  
  #progress-wrp .status {
    top: 3px;
    left: 50%;
    position: absolute;
    display: inline-block;
    color: #000000;
  }
	</style>
</head>

<body>
    
    <!-- FORM STARTS HERE  -->
	<h2 align="center" style="color:#121545">PROJECT DETAILS</h2>
    <div class="container">
    <div class="child">

 
   <div>
     <input id="files" type="file" name="files[]" multiple/>
     <button id="upload">Upload</button>
	 
     <div id="progress-wrp">
        <div class="progress-bar"></div>
        <div class="status">0%</div>
    </div>
   </div> 
   <div id="result">
       
   </div>
   </center>
   </div>
</body>
</html>