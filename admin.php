<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
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
<?php 
                session_start();
                if(!isset($_SESSION['email'] ) ){
                    header('location:index.html');
                }
                if($_SESSION['role']!='admin.php' ){
                    header('location:'.$_SESSION['role']);
                }
                  $conn=mysqli_connect("localhost","pecedu_projReview","tvTWL6q6wk","pecedu_projReview");
 ?>
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
                        <b><img style="width:30px" src="img/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span  >
                            <!-- <img src="images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                           <b > PEC</b>

                        </span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i style="color:white; font-size:25px;" class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"><a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i style="color:white; font-size:25px;" class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i style="color:white; " class="fa fa-bell"></i>
								<div class="notify"> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                        <?php
               
                 
                //  $result=mysqli_query($conn,"select * from facultylogin where email='".$_SESSION['email']."'");
                //  while($row=mysqli_fetch_assoc($result))
                //  {
                //      $_SESSION['name']=$row['name'];
                //  }
                // $result=mysqli_query($conn,"select * from notify where email='".$_SESSION['name']."' order by time desc");
                // while($row=mysqli_fetch_assoc($result))
                // {
                //     $time=$row['time'];
                //     if($row['category']==0){
                //         $title='Consent rejected';
                //         $color='btn-danger';
                //         $icon='ti-layout-placeholder';
                //     }else if($row['category']==1){
                //         $title='Consent approved';
                //         $color='btn-success';
                //         $icon='ti-check-box';
                //     }
                //     echo '<a href="#">
                //                 <div class="btn '.$color.' btn-circle m-r-10"><i class="'.$icon.'"></i></div>
                //                 <div class="mail-contnet">
                //                     <h5>'.$title.'</h5> <span class="mail-desc">'.$row['message'].'</span> <span class="time">'.$time.'</span>
                //                 </div>
                //             </a>';
                      
                // }
                                
                ?>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i style="color:white; font-size:25px;" class="fa fa-angle-right"></i> </a>
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
                                    
                                    <li><a href="logout.php"><i  style="color:black; font-size:20px;"class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div  class="left-sidebar">
            <!-- Sidebar scroll-->
            <div  class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav   class="sidebar-nav">
                    <ul  id="sidebarnav">
                        <li  class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a style="color:white;" onclick="students()">Guides-Students </a></li>
                                <!-- <li><a href="index.html">Analytics </a></li> -->
                            </ul>
                        </li>
                        
                        
                        <!-- <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-wpforms"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a  style="color:white;" >Consent Form</a></li>
                            </ul>
                        </li> -->
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i style="color:white; font-size:25px;" class="fa fa-table"></i><span class="hide-menu">Requests<span class="label label-rouded label-danger pull-right" id="not-label"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a  style="color:white;" onclick="pending()" >Pending Requests</a></li>
                                <li><a  style="color:white;" onclick="accepted()">Accepted Requests</a></li>
                                <li><a  style="color:white;" onclick="log()">Consent Submission Log</a></li>
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
        <div id="students"><h1 style="color:black">Approved Batches</h1>
            <div class="row">
                <?php
                $colors=['red','blue','yellow','green','pink','orange','purple'];
                 $result=mysqli_query($conn,"select * from approved group by guide");
                 $i=0;
                 while($row=mysqli_fetch_assoc($result))
                 {
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 g-card">
                    <h2 class="gcard-title" style="background-color:'.$colors[$i].'">'.$row['guide'].'</h2>';
                    $result1=mysqli_query($conn,"select * from approved where guide='".$row['guide']."'");
                    
                    while($row1=mysqli_fetch_assoc($result1)){
                        echo '<div class="row">
                        <div  class="col-12"><h3>
                        '.$row1['name'].' ('.$row1['regno'].')</h3>
                        </div>
                        </div>';
                       
                    }
                    echo'</div>';
                    $i++;
                    if($i==7){
                        $i=0;
                    }
                 }
                
                ?>

            </div>
            
        </div>
        <div id="pending" style="display:none">
        <div class="card">
    <div class="card-body">
        <h2 class="card-title">Pending Requests</h2>
        <h3 class="card-subtitle">Approve the requests you prefer</h3>
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Name</th>
                        <th>Register Number</th>
                        <th>Email</th>
                        <th>Course</th>
                        <th>Guide</th>
                        <th>Status</th>
                      
                    </tr>
                </thead>
            
                <tbody>
        
                    <?php
                    $count=0;
       $result=mysqli_query($conn,"select * from consent where guide_approval=1");
       while($row=mysqli_fetch_assoc($result))
       {
           $count++;
           ?>
           <tr>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['regno']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['course']?></td>
           <td><?php echo $row['guide']?></td>
           <td>
               <button style=color:green onclick='<?php echo 'approve("'.$row['sno'].'","'.$row['regno'].'","'.$row['name'].'","'.$row['email'].'","'.$row['course'].'","'.$row['guide'].'")'?>'>Approve</button>
               <button style=color:red onclick="reject('<?php echo $row['sno']?>','<?php echo $row['email']?>','<?php echo $row['guide']?>','<?php echo $row['regno']?>')">Reject</button>
            </td>
            </tr>
           <?php
       }
       
       ?>
<script>
    let a = <?php echo $count?>;
    if(a>0){
        document.getElementById("not-label").innerHTML=a;
    }else{
        document.getElementById("not-label").style.display="none";

    }
</script>
                
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
        <h6 class="card-subtitle">List of students you approved</h6>
        <div class="table-responsive m-t-40">
            <table id="example24" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <th>Name</th>
                        <th>Register Number</th>
                        <th>Email</th>
                        <th>Course</th>
                       <th>Guide</th>
                    </tr>
                </thead>
            
                <tbody>
        
                    <?php
       $result=mysqli_query($conn,"select * from approved ");
       while($row=mysqli_fetch_assoc($result))
       {
           ?>
           <tr>
           <td><?php echo $row['name']?></td>
           <td><?php echo $row['regno']?></td>
           <td><?php echo $row['email']?></td>
           <td><?php echo $row['course']?></td>
           <td><?php echo $row['guide']?></td>
          
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
        <div id="log" style="display:none">
        <div class="card">
    <div class="card-body">
        <h4 class="card-title">Consent Log</h4>
        <h6 class="card-subtitle">History of all the requests</h6>
        <div class="table-responsive m-t-40">
            <table id="example25" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    <!-- <th>Name</th> -->
                        <th>Register Number</th>
                        <!-- <th>Email</th> -->
                        <th>Guide</th>
                        <th>Consent Submitted Time</th>
                        <th>Guide Approved Time</th>
                        <th>Guide Rejected Time</th>
                        <th>Reason for Guide Rejection</th>
                        <th>Admin Approved Time</th>
                        <th>Admin Rejected Time</th>
                        <th>Reason for Admin Rejection</th>
                    </tr>
                </thead>
          
                <tbody>
        
                    <?php
       $result=mysqli_query($conn,"select * from timeanddate");
       while($row=mysqli_fetch_assoc($result))
       {
           if($row['guide_approve']=="" && $row['guide_reject']==""){
               $color="white";
           }
           else if($row['admin_approve']=="" && $row['admin_reject']==""){
                $color="#ff000060";
            }
            else{
                $color="#00ff0060";
            }
      //  $result1=mysqli_query($conn,"select name from roles where regno='".$row['regno']."'");
       // $result2=mysqli_query($conn,"select email from roles where regno='".$row['regno']."'");
        // echo $result1;
           ?>
           <tr style="background-color:<?php echo $color ?>">
           
           <td><?php echo $row['regno']?></td>
           
           <td><?php echo $row['guide']?></td>
           <td><?php echo $row['consent_time']?></td>
           <td><?php echo $row['guide_approve']?></td>
           <td><?php echo $row['guide_reject']?></td>
           <td><?php echo $row['guide_msg']?></td>
           <td><?php echo $row['admin_approve']?></td>
           <td><?php echo $row['admin_reject']?></td>
           <td><?php echo $row['admin_msg']?></td>
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
    </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <script>
        function pending(){
            document.getElementById('pending').style.display='block';
            document.getElementById('accepted').style.display='none';
            document.getElementById('students').style.display='none';
            document.getElementById('log').style.display='none';
        }
        function accepted(){
            document.getElementById('pending').style.display='none';
            document.getElementById('accepted').style.display='block';
            document.getElementById('students').style.display='none';
            document.getElementById('log').style.display='none';
        }
        function log(){
            document.getElementById('pending').style.display='none';
            document.getElementById('accepted').style.display='none';
            document.getElementById('students').style.display='none';
            document.getElementById('log').style.display='block';
        }
        function students(){
            document.getElementById('pending').style.display='none';
            document.getElementById('accepted').style.display='none';
            document.getElementById('log').style.display='none';
            document.getElementById('students').style.display='block';
        }
        function approve(sno,reg,name,email,course,guide){
            if (confirm('Are you sure you want to approve?')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "admin_approve_db.php",
                    data: {
                        sno:sno,
                        reg:reg,
                        name:name,
                        email:email,
                        course:course,
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
        function reject(sno,student,staff,reg){
            let message;
            if (message=prompt('Please mention the reason for rejecting')) {
                // Save it!
                $.ajax({
                    type: "POST",
                    url: "admin_approve_db.php",
                    data: {
                        reject:true,
                        sno:sno,
                        student:student,
                        staff:staff,
                        message:message,
                        reg:reg
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

