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

</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img style="width:20px" src="img/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- <img src="images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                            PEC

                        </span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="#"><i style="color:white; font-size:25px;" class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="#"><i style="color:white; font-size:25px;" class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="color:white" class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                        <?php
                session_start();
                if(!isset($_SESSION['email'] )){
                
                    header('location:index1.html');
                }
                if($_SESSION['role']!='student.php' ){
                    header('location:'.$_SESSION['role']);
                }
                $conn=mysqli_connect("localhost","root","root","review");
                // echo $_SESSION['email'];//="adharshkrish@outlook.com";
                $result=mysqli_query($conn,"select * from notify where email='".$_SESSION['email']."' order by time desc");
                while($row=mysqli_fetch_assoc($result))
                {
                    $time=$row['time'];
                    if($row['category']==0){
                        $title='Consent rejected';
                        $color='btn-danger';
                        $icon='ti-layout-placeholder';
                    }else if($row['category']==1){
                        $title='Consent approved';
                        $color='btn-success';
                        $icon='ti-check-box';
                    }
                    echo '<a href="#">
                                <div class="btn '.$color.' btn-circle m-r-10"><i class="'.$icon.'"></i></div>
                                <div class="mail-contnet">
                                    <h5>'.$title.'</h5> <span class="mail-desc">'.$row['message'].' by '.$row['about'].'</span> <span class="time">'.$time.'</span>
                                </div>
                            </a>';
                      
                }
                                
                ?>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="#;"> <strong>Check all notifications</strong> <i  class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                       
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $_SESSION['pic']?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <!-- <li><a href="#"><i class="ti-user"></i> Profile</a></li> -->
                                    
                                    <li><a href="logout.php"><i style="color:black; font-size:20px;" class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white" onclick="none()">None </a></li>
                                <!-- <li><a href="index1.html">Analytics </a></li> -->
                            </ul>
                        </li>
                        
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white" onclick="consent()">Consent Form</a></li>
                                <!-- <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-editor.html">Editor</a></li>
                                <li><a href="form-dropzone.html">Dropzone</a></li> -->
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white" href="#">Basic Tables</a></li>
                                <li><a style="color:white" href="#">Data Tables</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
        <div id="consent">
        <form action="consent_submit.php" method="post" class="consent-form">
<h2 align="center" style="color:#121545">STUDENT CONSENT FORM</h2>
        <div class="form__group field">
          <input type="text" class="form__field" placeholder="Student Name" name="name"  required />
          <label class="form__label">Student Name</label>
        
        </div>
        <div class="form__group field">
          <input type="text" class="form__field" placeholder="Register Number" name="regno"  required />
          <label  class="form__label">Register Number</label>
        </div>
        
        <div class="form__group field">
        <select class="form__field" name="course">
            <option value="Select" selected="true" disabled>Select your course</option>
            <option style="color:#000" value="M.Tech(DCS)">M.Tech - DCS</option>
            <option style="color:#000" value="M.Tech(IS)">M.Tech - IS</option>
        </select>
        </div>
        <div class="form__group field" style="display:none" >
          <input type="text" class="form__field" placeholder="Email ID" name="email" value="<?php echo $_SESSION['email'] ?>"  required />
          <label  class="form__label">Email ID</label>
        </div>
 
        <div class="form__group field">
        <select class="form__field"  name="guide">
            <option value="Select" selected="true" style="color:#9b9b9b" disabled>Select your guide</option>
            <?php
                $conn=mysqli_connect("localhost","root","root","review");
                $result=mysqli_query($conn,"select * from roles where role='guide'");
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <option style="color:#000" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php
                }
            ?>
        </select>
        </div>
        <div class="form__group field">
            <?php
                $guidedby="";
                $disabled="";
                $result=mysqli_query($conn,"select * from approved where email='".$_SESSION['email']."'");
                if($row=mysqli_fetch_assoc($result)){
                    $disabled="disabled";
                    $guidedby=$row['guide'];
                }
                $result=mysqli_query($conn,"select * from consent where email='".$_SESSION['email']."'");
                if($row=mysqli_fetch_assoc($result)){
                    $disabled="disabled";
                }
            ?>
        <button class="submit" name="datetime" <?php echo $disabled ?>>Submit</button>
            </div>
            <div id="response"> <h6 align="center"><?php
            $result=mysqli_query($conn,"select * from consent where email='".$_SESSION['email']."'");
            if($row=mysqli_fetch_assoc($result)){
                if($row['guide_approval']==0){
                   echo 'Your request has been sent to '.$row['guide'].' for approval';
                }
                else if($row['guide_approval']==1){
                   echo 'Your request has been sent to HOD for approval';
                    
                }
               
              
            }
            if($guidedby!=""){
                echo $guidedby.' is your guide';
            }
            ?></h6></div>
    </form>
        </div>
            </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <script>
        function consent(){
            document.getElementById('consent').style.display='block';
        }
        function none(){
            document.getElementById('consent').style.display='none';
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

