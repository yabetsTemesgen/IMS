 <?php
//   require_once '../Libraries/mailer/class.phpmailer.php'; 
//   // creates object
//   $mail = new PHPMailer(true); 
//   if(isset($_POST['btn_send']))
//   {
//     $email1 = strip_tags($_POST['email1']);
//    $email = strip_tags($_POST['email']);
//    $subject = strip_tags($_POST['subject']);
//    $text_message = "Hello";      
//    $message  = strip_tags($_POST['message']);
//  try
//    {
//     $mail->IsSMTP(); 
//     $mail->isHTML(true);
//     $mail->SMTPDebug  = 0;                     
//     $mail->SMTPAuth   = true;                  
//     $mail->SMTPSecure = "ssl";                 
//     $mail->Host       = "smtp.gmail.com";      
//     $mail->Port        = '465';             
//     $mail->AddAddress($email);
//     $mail->Username   ="yabtemesgen@gmail.com";  
//     $mail->Password   ="gmail-password";            
//     $mail->SetFrom('yabtemesgen@gmail.com','Yabets Temesgen');
//     $mail->AddReplyTo("yabtemesgen@gmail.com","Yabets Temesgen");
//     $mail->Subject    = $subject;
//     $mail->Body    = $message;
//     $mail->AltBody    = $message;
     
//     if($mail->Send())
//     {
     
//      $msg = "Hi, Your mail successfully sent to".$email." ";
//      echo $msg;
//      header("location: company.php");
     
//     }
//    }
//    catch(phpmailerException $ex)
//    {
//     $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
//    }
//   } 
  ?> 
  <?php
  

	$headers = "From: yabtemesgen@gmail.com\r\n";
	$to = "yabtemesgen@gmail.com";
	$subject = "Sending a basic email with php";
	$message = "Checkout this super simple script to send a basic text email!";

	if ( mail($to, $subject, $message, $headers) )
		echo "<script>window.alert('Email sent successfully!');</script>";
	else
		echo "<script>window.alert('Email not sent successfully!');</script>";
		// header("location.company.php");
		echo "<script>history.go(-1)</script>";

?>
    