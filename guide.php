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
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
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
                    <a class="navbar-brand" href="index.php">
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
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="#"><i  style="color:white; font-size:25px" class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="#"><i style="color:white; font-size:25px" class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="color:white ; " class="fa fa-bell"></i>
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
                if(!isset($_SESSION['email'] ) ){
                    header('location:login.php');
                }
                if($_SESSION['role']!='guide.php' ){
                    header('location:'.$_SESSION['role']);
                }
                 $conn=mysqli_connect("localhost","root","","review");
                 
                 $result=mysqli_query($conn,"select * from roles where email='".$_SESSION['email']."' and role='guide'");
                 while($row=mysqli_fetch_assoc($result))
                 {
                     $_SESSION['name']=$row['name'];
                 }
                $result=mysqli_query($conn,"select * from notify where email='".$_SESSION['name']."' order by time desc");
                while($row=mysqli_fetch_assoc($result))
                {
                    $time=$row['time'];
                    if($row['category']==0){
                        $title='Consent rejected';
                        $color='btn-danger';
                        $icon='ti-layout-placeholder';
                        $by=' by Admin';
                    }else if($row['category']==1){
                        $title='Consent approved';
                        $color='btn-success';
                        $icon='ti-check-box';
                        $by=' - '.$row['about'];
                    }
                    echo '<a href="#">
                                <div class="btn '.$color.' btn-circle m-r-10"><i class="'.$icon.'"></i></div>
                                <div class="mail-contnet">
                                    <h5>'.$title.'</h5> <span class="mail-desc">'.$row['message'].$by.'</span> <span class="time">'.$time.'</span>
                                </div>
                            </a>';
                      
                }
                                
                ?>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="#"> <strong>Check all notifications</strong> <i style="color:white;font-size:25px" class="fa fa-angle-right"></i> </a>
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
                                    
                                    <li><a href="logout.php"><i style= "color:black ; font-size:20px" class="fa fa-power-off"></i> Logout</a></li>
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
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i style= "color:white ; font-size:25px"class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a  style="color:white;" onclick="mystudents()">My Students</a></li>
                            </ul>
                        </li>
                        
                        
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style= "color:white ; font-size:25px" class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white;" >Consent Form</a></li>
                                <!-- <li><a href="form-layout.html">Form Layout</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-editor.html">Editor</a></li>
                                <li><a href="form-dropzone.html">Dropzone</a></li> -->
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style= "color:white ; font-size:25px" class="fa fa-table"></i><span class="hide-menu">Requests</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white;" onclick="pending()" >Pending Requests</a></li>
                                <li><a style="color:white;" onclick="accepted()">Accepted Requests</a></li>
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
        <div id="pending" style="display:none">
        <div class="card">
    <div class="card-body">
    <p><?php echo $_SESSION['name']?>The number of M.Tech(DCS) candidate for the project  this academic year(2020-21) is 2 and the  number of M.Tech(IS) candidate is 16. Since the total number of candidates is 18, faculty members are requested to give consent for only one candidate for the M.Tech programme this academic year.</p>
        <h4 class="card-title">Pending Requests</h4>
        <h6 class="card-subtitle">Approve the requests you prefer</h6>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Name</th>
                        <th>Register Number</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
    <?php
       $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['name']."' and guide_approval=0");
       while($row=mysqli_fetch_assoc($result))
       {
           ?>
           <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['regno']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['course']?></td>
            <td>
                    <button name="guide_accept" style=color:green onclick="approve('<?php echo $row['sno']?>','<?php echo $row['regno']?>','<?php echo $row['guide']?>')">Approve</button>
                    <button name="guide_reject" style=color:red onclick="reject('<?php echo $row['sno']?>','<?php echo $row['email']?>','<?php echo $row['regno']?>','<?php echo $row['guide']?>')">Reject</button>
            </td>
            </tr>
           <?php
       }
       ?>
 
                
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
    <div id="accepted" style="display:none">
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Accepted Students</h4>
        <h6 class="card-subtitle">Approve the requests you prefer</h6>
        <div class="table-responsive m-t-40">
            <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Name</th>
                        <th>Register Number</th>
                        <th>Email</th>
                        <th>Course</th>
                       
                      
                    </tr>
                </thead>
           
                <tbody>
        
                    <?php
       $result=mysqli_query($conn,"select * from consent where guide='".$_SESSION['name']."' and guide_approval=1");
       while($row=mysqli_fetch_assoc($result))
       {
           ?>
           <tr>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['regno']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['course']?></td>
          
                    </tr>
           <?php
       }
       ?>
 
                
                </tbody>
            </table>
        </div>
    </div>
</div>  
        </div>
       <center> <div   id="mystudents">
            <div class="row ">
             <div  class="student-card col-md-6 ">
             <h2 style="background-color:#121545; margin:-30px -30px 20px -30px; padding:20px; color:#FFF; font-weight:700">My Students</h2>
             <div class="row ">
             <?php
       $result=mysqli_query($conn,"select * from approved where guide='".$_SESSION['name']."'");
       while($row=mysqli_fetch_assoc($result))
       {
            echo '<div style="font-size:20px" class=col-6>'.$row['name'].'</div><div class=col-6>'.$row['regno'].'</div>';
       }
              ?>
              </div>
             </div>
    </div>
        </div>
    </center>
    </div>

        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    
    <script>
        function pending(){
            document.getElementById('pending').style.display='block';
            document.getElementById('accepted').style.display='none';
            document.getElementById('mystudents').style.display='none';
        }
        function accepted(){
            document.getElementById('pending').style.display='none';
            document.getElementById('accepted').style.display='block';
            document.getElementById('mystudents').style.display='none';
        }
        function approve(sno,regno,guide){
            if (confirm('Are you sure you want to approve?')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "guide_approve_db.php",
                    data: {
                        sno:sno,
                        regno:regno,
                        guide:guide
                    },
                    success: function (blabla) {
                        console.log(blabla)
                        alert('The consent of '+regno+' has been sent to HOD  for approval')
                        window.location.reload()
                    }
                });
                
            } else {
            // Do nothing!
            }
        }
        function reject(sno,email,regno,guide){
            let message;
            if (message=prompt('Please mention the reason for rejecting')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "guide_approve_db.php",
                    data: {
                        reject:true,
                        sno:sno,
                        email:email,
                        message:message,
                        regno:regno,
                        guide:guide
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
        function mystudents(){
            document.getElementById('pending').style.display='none';
            document.getElementById('accepted').style.display='none';
            document.getElementById('mystudents').style.display='block';
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
