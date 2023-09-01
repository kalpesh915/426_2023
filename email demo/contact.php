<?php 
session_start();
ob_start();
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
 
// Include library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 


// collect data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
        

    $content = "<hr><h3>New Web Inquiry</h3><hr><p>Name : $name</p> <p>Phone : $phone</p> <p>Email : $email</p> <p>Subject : $subject</p> <p>Message : $message</p>";
        
  
 
// Create an instance; Pass `true` to enable exceptions 
$mail = new PHPMailer; 
 
// Server settings 
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;    //Enable verbose debug output 
$mail->isSMTP();                            // Set mailer to use SMTP 
$mail->Host = 'mail.yourdomainname.com';           // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;                     // Enable SMTP authentication 

$mail->Username = 'email@domainname.com';       // SMTP username 
$mail->Password = 'emailpassword';         // SMTP password 
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 465;                          // TCP port to connect to 
 
// Sender info 
$mail->setFrom('from email address', 'Email Title'); 
$mail->addReplyTo('reply email address', 'Email Title'); 
 
// Add a recipient 

 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 

function sendTransactionalEmail($content){
    // Mail subject 
    global $mail;
    $receiverEmail = "to email address";
    
    $mail->addAddress($receiverEmail); 
    $mail->Subject = "New Web inquiry";

    // Mail body content 
    $bodyContent = "<h3>You Have new Web Inquiry</h3>"; 
    $bodyContent .= "<p>$content</p>"; 
    $mail->Body    = $bodyContent; 

    // Send email 
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else { 
        echo 'Message has been sent.'; 
    }
}

    
      sendTransactionalEmail($content);
        
        $_SESSION["msg"] = '<div class="alert alert-success alert-dismissible"> <button type="button" class="btn-close" data-bs-dismiss="alert"></button> <strong>Success!</strong> Thank you, we will reach you soon.. </div>';
            
        header("location:contactus.php#contact");

?>