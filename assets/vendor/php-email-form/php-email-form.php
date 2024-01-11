<?php
 //maling
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; \

// Submit Button Name  
 if(isset($_POST["register"]))
 {
require_once("PHPMailer/PHPMailer.php");
require_once("PHPMailer/SMTP.php");
require_once("PHPMailer/Exception.php");

// Get Form Field
 $fn=$_POST["name"];
 $em=$_POST["email"];
 $ph=$_POST["subject"];
 $ma=$_POST["message"];
 
  
 try {
     //Server settings\
     ob_start();    
 
    $mail = new PHPMailer(true);
     $mail->SMTPDebug =false;              //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'makwana0843@gmail.com';                     //SMTP username
     $mail->Password   = 'tqgeblnugacxlsev';                               //SMTP password
     $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
 
     //Recipients
     $mail->setFrom($_POST["register"],'mail sending');
     $mail->addAddress('makwana0843@gmail.com', 'contanct us mail sending');     //Add a recipient
     // $mail->addAddress('ellen@example.com');               //Name is optional
     // $mail->addReplyTo('info@example.com', 'Information');
     // $mail->addCC('cc@example.com');
     // $mail->addBCC('bcc@example.com');
 
     //Attachments
     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'contact with us email sending data';
     $mail->Body    =  "<p> name is</p>" .$fn."<br>". "<p> company gmail is</p>" .$em."<br>". "<p> costmer gmail is</p>" .$ma."<br>"."<p> Message is</p>" .$ph."<p> costmer Subject is</p>";
     //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
     $mail->send();
     echo "<script>  alert('Thanks for contect with us our one of admin will contect with contact with you soon!') window.location='mailsending.php';
     </script>";
 }
 
 catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 
 }

 }

?>