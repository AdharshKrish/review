<?php
 $conn=mysqli_connect("localhost","root","","review");
 if(isset($_POST['datetime']))
{
    date_default_timezone_set('Asia/Kolkata');
    $date_clicked = date('Y-m-d H:i:s');;
}
$regno=strtoupper($_POST['regno']);
 $result=mysqli_query($conn,"insert into consent values(null,'".$_POST['name']."','".$regno."','".$_POST['email']."','".$_POST['course']."','".$_POST['guide']."',0,'".$date_clicked."')");
 $result=mysqli_query($conn,"insert into timeanddate values('".$regno."','".$date_clicked."','".$_POST['guide']."',null,null,null,null,null,null)");
 $result=mysqli_query($conn,"update roles set name='".$_POST['name']."', regno='".$regno."', course='".$_POST['course']."' where email='".$_POST['email']."' and role='student'");

 $result=mysqli_query($conn,"select * from roles where name='".$_POST['guide']."' and role='guide'");
   while($row=mysqli_fetch_assoc($result)){
       $receiver=$row['email'];
   }
$n=10; 
function getName($n) { 
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
	$randomString = ''; 

	for ($i = 0; $i < $n; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomString .= $characters[$index]; 
	} 

	return $randomString; 
} 

$code=getName($n); 
$approve="<a href='http://cse.pec.edu/prs/guide_response_mail.php?code=$code&response=1'>Approve</a>";
$reject="<a href='http://cse.pec.edu/prs/guide_response_mail.php?code=$code&response=0'>Reject</a>";
$result=mysqli_query($conn,"insert into mail_response values('$code','".$_POST['guide']."','$regno' )");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// require_once('./db_con.php');

    // $name=$_POST["name"];
    // $id=$_POST["id"];
    // $email=$_POST["email"];
    // $phno=$_POST["phno"];
    // $query=$_POST["query"];
    // $amail=$_POST["auth"];
    // $sub=$_POST["authsub"];
    // $bod="Name: ".$name."<br>ID: ".$id."<br>E-mail: ".$email."<br>Phone no: ".$phno."<br>Query: ".$query ;

    // $receiver = "";
    $sub = "M.Tech Project Guide Consent Form";
    $body = "Respected Professor,<br>
    I  ".$_POST['name']." studying ".$_POST['course']." having registration number $regno  request to guide me  for the Project work for  academic year 2020-2021.<br>
    
    Thanks & Regards<br>".$_POST['name']."<br>".$approve." / ".$reject;
    
    
    

    $mail = new PHPMailer(true);
    
    try {
        //Server settings
    
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host      = 'smtp.gmail.com';        // Specify main and backup SMTP servers
        $mail->SMTPAuth  = true;                    // Enable SMTP authentication
        $mail->CharSet   = "UTF-8";
    // $mail->SMTPDebug = 2;                       // Enable verbose debug output
        $mail->isHTML(true);                        // Set email format to HTML
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );



        $mail->Username = 'noreply@pec.edu';
        $mail->Password = 'designclubpec';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        //$mail->SMTPDebug =4 ;
        //$mail->SMTPAutoTLS = false;
        // TCP port to connect to
    
        //Recipients
        $mail->setFrom('adharshkrish@pec.edu', 'reviewsystem@noreply');
        $mail->addAddress($receiver, $_POST['guide']);     // Add a recipient
    // $mail->addAddress('optional name');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC($email);
        // $mail->addBCC('bcc@example.com');
    // echo "<script>";
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $sub;
        $mail->Body    = $body;
        $mail->AltBody = $body;
        echo $mail->send();
        // if()
        // {
        // echo "alert('Complaint has been registered')";

        // header("Location: ../home/contact-us.html");
        // die();}
        // else {
        //     echo "alert('some technical error please try again later')";
        //     header("Location: ../home/contact-us.html");
        //     die();
        // }
    
    } catch (Exception $e) {
        // echo "alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')";
        die();
    }
  header('location:login.php');