<?php
include "../includes/db_conn.php";
$email = $_POST["email"];
$query = "SELECT * FROM students WHERE students.email = '$email' UNION SELECT * FROM alumnis WHERE alumnis.email = '$email'";
$get_mail_query = mysqli_query($connection,$query);
if(mysqli_num_rows($get_mail_query) == 1)
{
  $row = mysqli_fetch_assoc($get_mail_query);
  //echo $reset_password = base64_decode($row['password']);
  
}


require 'aawezmail/aawezAutoload.php';

$mail = new aawez();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "aawezk786@gmail.com";
  $mail->Password = "aawez456456";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "aawezk786@gmail.com";
  $mail->FromName = "AlumniPortal";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "Recover Password";
  $mail->Body = "<b>This is Your Password:</b>".base64_decode($row["password"]);
  $mail->AltBody = "";
  if(!$mail->send())
  {
   echo "Mail Error: " . $mail->ErrorInfo;
  }
  else
  {
    echo "<script>alert('Send Successfully')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
  }